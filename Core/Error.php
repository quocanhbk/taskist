<?php

namespace Core;

use Config\Application;

class Error
{
    public static function errorHandler(
        int $level,
        string $message,
        string $file,
        int $line
    ): void {
        if (error_reporting() !== 0) {
            throw new \ErrorException($message, 0, $level, $file, $line);
        }
    }

    public static function exceptionHandler($exception): void
    {
        $code = $exception->getCode();

        if ($code != 404) {
            $code = 500;
        }

        http_response_code($code);

        $title = $code == 404 ? "Page not found" : "An error has occurred";
        $header = "Error";
        $homepage = Application::DEFAULT_ROUTE;
        $errorinfo = self::getErrorInfo($exception);

        View::renderError(compact("header", "homepage", "errorinfo", "title"));
    }

    public static function getErrorInfo($exception): string
    {
        $errorinfo = "";
        $errorinfo .=
            "<p class=\"text-danger\">Message: '" .
            $exception->getMessage() .
            "'</p>";
        $errorinfo .=
            "<p class=\"text-warning text-left\">Stack trace:<br /><span>" .
            nl2br($exception->getTraceAsString()) .
            "</span></p>";
        $errorinfo .=
            "<p>Thrown in '" .
            $exception->getFile() .
            "' on line " .
            $exception->getLine() .
            "</p>";
        return $errorinfo;
    }
}
