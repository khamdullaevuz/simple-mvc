<?php

namespace framework\router\console;

class Router
{
    private static array $routes = [];

    public static function add($request, $method): void
    {
        self::$routes[$request] = $method;
    }

    public static function routes(): array
    {
        return self::$routes;
    }
}