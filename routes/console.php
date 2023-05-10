<?php

use App\Controllers\TestController;
use framework\router\console\Router;

Router::add('test', [TestController::class, 'console']);