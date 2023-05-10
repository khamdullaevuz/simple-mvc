<?php

namespace Framework;

class Controller
{
    public function view($name, $args = []): void
    {
        extract($args);
        require __DIR__ . '/../views/'. $name . '.view.php';
    }
}