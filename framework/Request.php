<?php

namespace Framework;

class Request
{
    public static function get(): string
    {
        return explode("?", filter_var(trim($_SERVER['REQUEST_URI'], "/"), FILTER_SANITIZE_URL))[0];
    }

    public function all(): array
    {
        return $_REQUEST;
    }
}