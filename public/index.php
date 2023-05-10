<?php

require __DIR__ . '/../loader.php';

use App\Exceptions\HttpNotFoundException;
use Framework\App;

try {
    $app = new App();
    $app->run();
} catch (HttpNotFoundException|Exception|Error|Throwable $e) {
    abort($e->getCode(), $e->getMessage());
}