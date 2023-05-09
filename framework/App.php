<?php

namespace Framework;

class App
{
    public function run(): void
    {
        $request = Request::get();
        $routes = Router::routes();
        if(array_key_exists($request, $routes)){
            $route = $routes[$request];
            $controller = $route[0];
            $method = $route[1];
            (new $controller())->$method();
        }
    }
}