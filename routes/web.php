<?php

use Framework\Router;
use Controllers\TestController;
use Controllers\HomeController;

Router::get('', [HomeController::class, 'index']);
Router::get('test', [TestController::class, 'test']);