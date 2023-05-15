<?php

require __DIR__ . '/framework/helpers.php';

spl_autoload_register(function($name){
    require $name . '.php';
});

require __DIR__ . '/routes/web.php';
require __DIR__ . '/routes/console.php';
