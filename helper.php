<?php

function abort($code = 500, $message = "Internal server error"): void
{
    http_response_code($code);
    view('error', compact('message'));
}

function view($name, $args = []): void
{
    extract($args);
    require __DIR__ . '/views/'. $name . '.view.php';
}

function dd(...$data): void
{
    var_dump(...$data);
    http_response_code(500);
    die(500);
}