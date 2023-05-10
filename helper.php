<?php

use JetBrains\PhpStorm\NoReturn;

function view($name): void
{
    require __DIR__ . '/views/'. $name . '.view.php';
}

function dd(...$data): void
{
    var_dump(...$data);
    die(500);
}