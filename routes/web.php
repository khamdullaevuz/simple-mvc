<?php

use App\Controllers\HomeController;
use App\Controllers\TestController;
use framework\router\web\Router;

Router::add('', [HomeController::class, 'index']);
Router::add('test', [TestController::class, 'test']);