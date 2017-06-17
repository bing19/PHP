<?php

define ('APP_ROOT', __DIR__ );
define ('DS', DIRECTORY_SEPARATOR);

function getClass ($className) {
    $path = APP_ROOT . DS . 'classes' . DS . $className . '.class';
    spl_autoload($path);
}

spl_autoload_register('getClass');




