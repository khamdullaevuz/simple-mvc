<?php

require __DIR__ . '/helper.php';

spl_autoload_register(function($name){
    require $name . '.php';
});

require __DIR__ . '/routes/web.php';
require __DIR__ . '/routes/console.php';
