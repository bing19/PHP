<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 13.06.17
 * Time: 22:53
 */

//function __autoload ($className) {
//    $classNameArr = explode('_', $className);
//    if (count($classNameArr) == 2) {
//        $aClassFilePath = APP_ROOT . DS . 'classes' . DS . $classNameArr[0] . DS . $classNameArr[1] . '.php';
//        if (file_exists($aClassFilePath)) {
//            echo "<p>executing __aturoload() with aClassName = {$className}</p>";
//            require_once $aClassFilePath;
//            return true;
//        }
//    } else {
//        $aClassFilePath = APP_ROOT . DS . 'classes' . DS . $classNameArr[0] . '.php';
//        if (file_exists($aClassFilePath)) {
//            echo "<p>executing __aturoload() with aClassName = {$className}</p>";
//            require_once $aClassFilePath;
//            return true;
//        }
//    }
//
//
//    return false;
//}



define('APP_ROOT', __DIR__ );
define('DS', DIRECTORY_SEPARATOR);


function loadClasses($ClassName) { // Функция загрузчик
    $classNameArr = explode('_', $ClassName);
    if (count($classNameArr) == 2) {
        $ClassFilePath = APP_ROOT . DS . 'classes' . DS . $classNameArr[0] . DS . $classNameArr[1] . '.class.php';
        if (file_exists($ClassFilePath)) {
            echo "<p>executing __aturoload() with ClassName = {$ClassName}</p>";
            require_once $ClassFilePath;
            return true;
        }
    } else {
        $ClassFilePath = APP_ROOT . DS . 'classes' . DS . $classNameArr[0] . '.php';
        if (file_exists($ClassFilePath)) {
            echo "<p>executing __aturoload() with ClassName = {$aClassName}</p>";
            require_once $ClassFilePath;
            return true;
        }
    }



    return false;
}

spl_autoload_register('loadClasses'); // Регистрация функции загрузчика