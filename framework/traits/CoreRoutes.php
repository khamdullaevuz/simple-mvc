<?php

namespace framework\traits;

use framework\handlers\ConsoleHandler;
use framework\router\console\Router as ConsoleRouter;

trait CoreRoutes
{
    public function loadCoreRoutes(): void
    {
        ConsoleRouter::add('serve', [ConsoleHandler::class, 'handle']);
    }
}