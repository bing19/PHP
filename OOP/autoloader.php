<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 13.06.17
 * Time: 22:53
 */

function __autoload ($className) {
    $classNameArr = explode('_', $className);
    if (count($classNameArr) == 2) {
        $aClassFilePath = APP_ROOT . DS . 'classes' . DS . $classNameArr[0] . DS . $classNameArr[1] . '.php';
        if (file_exists($aClassFilePath)) {
            echo "<p>executing __aturoload() with aClassName = {$className}</p>";
            require_once $aClassFilePath;
            return true;
        }
    } else {
        $aClassFilePath = APP_ROOT . DS . 'classes' . DS . $classNameArr[0] . '.php';
        if (file_exists($aClassFilePath)) {
            echo "<p>executing __aturoload() with aClassName = {$className}</p>";
            require_once $aClassFilePath;
            return true;
        }
    }


    return false;
}