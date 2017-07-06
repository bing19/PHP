<?php
define ('APP_ROOT', __DIR__ );
define ('DS', DIRECTORY_SEPARATOR);
function getClass ($className) {
    $path = explode('_', $className);
    $path = APP_ROOT . DS . implode(DS, $path);
    spl_autoload($path);
}
spl_autoload_register('getClass');
