<?php

namespace Core;

class Request
{
    static $params = [];

    static $queries = [];

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

    public static function getQuery(string $name, string $default = null)
    {
        if (isset(self::$queries[$name])) {
            return self::$queries[$name];
        }

        return $default;
    }

    public static function setQueries(array $queries): void
    {
        self::$queries = $queries;
    }

}