<?php

namespace Core;

class Request
{
    static $params = [];

    public static function getParam(string $name, string $default = null)
    {
        if (isset(self::$params[$name])) {
            return self::$params[$name];
        }

        return $default;
    }

    public static function setParams(array $params): void
    {
        self::$params = $params;
    }
}
