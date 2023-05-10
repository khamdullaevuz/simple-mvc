<?php

namespace framework;

use framework\exceptions\HttpNotFoundException;
use framework\exceptions\CommandNotFoundException;
use framework\router\console\Router as ConsoleRouter;
use framework\router\web\Router as WebRouter;
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
     * @throws CommandNotFoundException
     */
    public function handle($args = []): void
    {
        $method = $args[1];
        $this->loadCoreRoutes();
        $routes = ConsoleRouter::routes();
        if(array_key_exists($method, $routes))
        {
            $route = $routes[$method];
            $controller = $route[0];
            $method = $route[1];
            $args = array_slice($args, 2);
            (new $controller())->$method($args);
        }else{
            throw new CommandNotFoundException();
        }
    }
}