<?php

use Framework\Router;
use Controllers\TestController;
use Controllers\HomeController;

Router::add('', [HomeController::class, 'index']);
Router::add('test', [TestController::class, 'test']);