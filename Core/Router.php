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
        $r = [
            "route" => null,
            "controller" => null,
        ];

        $max = 1;
        if (isset($this->routes[$method])) {
            // sort routes by params count
            uksort($this->routes[$method], function ($a, $b) {
                $a_params_count = count(array_filter(
                    explode("/", trim($a, "/")), 
                    function ($v) {
                        return strpos($v, ":") === 0;
                    }
                ));
                $b_params_count = count(array_filter(
                    explode("/", trim($b, "/")), 
                    function ($v) {
                        return strpos($v, ":") === 0;
                    }
                ));

                return $a_params_count - $b_params_count;
            });

            foreach ($this->routes[$method] as $route => $controller) {
                $url_segments = explode("/", trim($url, "/"));
                $route_segments = explode("/", trim($route, "/"));
                if (
                    count($url_segments) === count($route_segments) &&
                    count(array_intersect($url_segments, $route_segments)) >=
                        $max
                ) {
                    $r = [
                        "route" => $route,
                        "controller" => $controller,
                    ];
                    $max = count(
                        array_intersect($url_segments, $route_segments)
                    );
                }
            }
        }

        return $r;
    }

    public function extractUrlParams(string $url): void
    {
        $url_segments = explode("/", trim($url, "/"));
        $route_segments = explode("/", trim($this->route["route"], "/"));

        $params = [];
        for ($i = 0; $i < count($route_segments); $i++) {
            if (strpos($route_segments[$i], ":") !== false) {
                $param = str_replace(":", "", $route_segments[$i]);
                $params[$param] = $url_segments[$i];
            }
        }

        Request::setParams($params);
    }

    public function extractUrlQueries(): void
    {
        $query_string = parse_url($_SERVER["REQUEST_URI"], PHP_URL_QUERY);

        $queries = [];
        if ($query_string) {
            parse_str($query_string, $queries);
        }

        Request::setQueries($queries);
    }

    private function runRoute(): void
    {
        $controller_class = explode("@", $this->route["controller"])[0];

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
        $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

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
        $this->extractUrlQueries();

        $this->runRoute();
    }
}