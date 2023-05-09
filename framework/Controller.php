<?php

namespace Framework;

class Controller
{
    public function view($name): void
    {
        require __DIR__ . '/../views/'. $name . '.view.php';
    }
}