<?php

define ('APP_ROOT', __DIR__ );
define ('DS', DIRECTORY_SEPARATOR);

function getClass ($className) {
    if($className[0] == 'i') {
        $path = APP_ROOT . DS . 'interface' . DS . $className . '.interface';
        spl_autoload($path);
    } elseif (stristr($className, 'Config')) {
        $path = APP_ROOT . DS . 'config' . DS . $className;
        spl_autoload($path);
    } else {
        $path = APP_ROOT . DS . 'classes' . DS . $className . '.class';
        spl_autoload($path);
    }
}

spl_autoload_register('getClass');




