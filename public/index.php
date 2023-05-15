<?php

require __DIR__ . '/../loader.php';

use framework\App;
use framework\exceptions\HttpNotFoundException;

try {
    $app = new App();
    $app->run();
} catch (HttpNotFoundException|Exception|Error|Throwable $e) {
    echo abort($e->getCode(), $e->getMessage());
}