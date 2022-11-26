<?php

namespace Core;

class View
{
    static function render(string $view, array $params = []): void
    {
        extract($params, EXTR_SKIP);

        $file = APPLICATION_PATH . "/App/Views/$view.php";

        if (is_readable($file)) {
            if (strpos($view, "Pages/") > -1) {
                require_once $file;
            } else {
                require $file;
            }
        } else {
            throw new \Exception("$file not found");
        }
    }

    static function renderError(array $params): void
    {
        extract($params, EXTR_SKIP);

        $file = APPLICATION_PATH . "/App/Views/Page/Error.php";

        if (is_readable($file)) {
            require_once $file;
        } else {
            throw new \Exception("$file not found");
        }
    }
}
