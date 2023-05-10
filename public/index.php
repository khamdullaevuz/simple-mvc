<?php

require __DIR__ . '/../loader.php';

use Framework\App;
use framework\exceptions\HttpNotFoundException;

try {
    $app = new App();
    $app->run();
} catch (HttpNotFoundException|Exception|Error|Throwable $e) {
    abort($e->getCode(), $e->getMessage());
}