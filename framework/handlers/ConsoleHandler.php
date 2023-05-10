<?php

namespace framework\handlers;

class ConsoleHandler
{
    public function handle()
    {
        $dir = __DIR__ . '/../../public';
        $command = "php -S localhost:8000 -t $dir";
        exec($command);
    }
}