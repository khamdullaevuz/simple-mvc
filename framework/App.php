<?php

namespace framework;

use App\Exceptions\HttpNotFoundException;
use App\Exceptions\MethodNotFoundException;
use framework\router\web\Router as WebRouter;
use framework\router\console\Router as ConsoleRouter;
use framework\traits\CoreRoutes;

final class App
{
    use CoreRoutes;
    /**
     * @throws HttpNotFoundException
     */
    public function run(): void
    {
        $request = Request::get();
        $routes = WebRouter::routes();
        if (array_key_exists($request, $routes)) {
            $route = $routes[$request];
            $controller = $route[0];
            $method = $route[1];
            (new $controller())->$method(new Request());
        } else {
            throw new HttpNotFoundException();
        }
    }

    /**
     * @throws MethodNotFoundException
     */
    public function handle($args = []): void
    {
        $method = $args[1];
        CoreRoutes::load();
        $routes = ConsoleRouter::routes();
        if(array_key_exists($method, $routes))
        {
            $route = $routes[$method];
            $controller = $route[0];
            $method = $route[1];
            array_shift($args);
            array_shift($args);
            (new $controller())->$method($args);
        }else{
            throw new MethodNotFoundException();
        }
    }
}