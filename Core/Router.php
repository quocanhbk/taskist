<?php

namespace Core;

use Config\Application;

class Router
{
    protected $routes = [];

    private $route = null;

    public function __construct()
    {
        $routes = APPLICATION_PATH . "/App/Routes.php";

        if (is_readable($routes)) {
            $this->routes = require_once $routes;
        } else {
            throw new \Exception("Routes.php not found");
        }
    }

    private function checkRoute(string $url, string $method): iterable
    {
        // trim the url
        if (isset($this->routes[$method])) {
            foreach ($this->routes[$method] as $route => $controller) {
                if (preg_match("#^{$route}$#", $url)) {
                    return [
                        "route" => $route,
                        "controller" => $controller,
                    ];
                }
            }
        }

        return [
            "route" => null,
            "controller" => null,
        ];
    }

    public function extractUrlParams(string $url): void
    {
        $params_string = trim(str_replace($this->route, "", $url), "/");

        $params = explode("/", $params_string);

        $params = array_filter($params, function ($param) {
            return !empty($param);
        });

        Request::setParams($params);
    }

    private function runRoute(): void
    {
        $controller_class = explode("@", $this->route["controller"])[0];

        error_log("App\Controllers\\" . $controller_class);

        if (class_exists("App\Controllers\\" . $controller_class)) {
            $controller = "App\Controllers\\" . $controller_class;

            $controller = new $controller();

            $method = explode("@", $this->route["controller"])[1];

            if (method_exists($controller, $method)) {
                $controller->$method();
            } else {
                throw new \Exception(
                    "Method " . $method . " not found in " . $controller_class
                );
            }
        } else {
            throw new \Exception(
                "Controller " . $controller_class . " not found",
                404
            );
        }
    }

    public function dispatch(): void
    {
        $url = $_SERVER["REQUEST_URI"];
        // trim out / at the end
        $url = rtrim($url, "/");

        $method = $_SERVER["REQUEST_METHOD"];

        if ($url === "" || $url === "/") {
            $url = Application::DEFAULT_ROUTE;
        }

        $this->route = $this->checkRoute($url, $method);

        if ($this->route["route"] === null) {
            throw new \Exception("Route not found", 404);
        }

        $this->extractUrlParams($url);

        $this->runRoute();
    }
}