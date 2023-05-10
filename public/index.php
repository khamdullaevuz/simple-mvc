<?php

require __DIR__ . '/../loader.php';

use app\Exceptions\HttpNotFoundException;
use Framework\App;

try {
    $app = new App();
    $app->run();
} catch (HttpNotFoundException|Exception|Throwable $e) {
    abort($e);
}