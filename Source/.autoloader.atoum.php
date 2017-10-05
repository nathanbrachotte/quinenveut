<?php

spl_autoload_register(function ( $class ) {

    $parts = explode('\\', $class);
    $root  = __DIR__ . DIRECTORY_SEPARATOR . 'Vendor';

    if('Test' === $parts[0]) {

        $root = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Test' .
                DIRECTORY_SEPARATOR . 'Vendor';
        array_shift($parts);
    }

    $path = $root . DIRECTORY_SEPARATOR .
            implode(DIRECTORY_SEPARATOR, $parts) . '.php';

    if(false === file_exists($path))
        return false;

    require_once $path;

    return true;
});
