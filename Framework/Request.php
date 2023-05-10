<?php

namespace Framework;

class Request
{
    public static function get(): string
    {
        return explode("?", filter_var(trim($_SERVER['REQUEST_URI'], "/"), FILTER_SANITIZE_URL))[0];
    }

    public static function getFullUrl(): string
    {
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    }

    public function all(): array
    {
        $url = self::getFullUrl();
        $components = parse_url($url, PHP_URL_QUERY);
        parse_str($components ?? '', $results);
        return $results;
    }
}