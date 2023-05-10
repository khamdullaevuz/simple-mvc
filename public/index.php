<?php

require __DIR__ . '/../loader.php';

use Exceptions\HttpNotFoundException;
use Framework\App;

$app = new App();
try {
    $app->run();
} catch (HttpNotFoundException $e) {
    http_response_code($e->getCode());
    $message = $e->getMessage();
    view('error', compact('message'));
}