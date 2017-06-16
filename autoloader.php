<?php

define ('APP_ROOT', __DIR__ );
define ('DS', DIRECTORY_SEPARATOR);

$getClass = function ($className) {
    $path = APP_ROOT . DS . 'calasses' . DS . $className . 'class.php';
    spl_autoload($path);
};

var_dump($getClass);

spl_autoload_register($getClass);

$car = new Auto();

var_dump($car);