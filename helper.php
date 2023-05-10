<?php

function view($name, $args = []): void
{
    extract($args);
    require __DIR__ . '/views/'. $name . '.view.php';
}

function dd(...$data): void
{
    var_dump(...$data);
    die(500);
}