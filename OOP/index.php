<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 12.06.17
 * Time: 22:27
 */


define('APP_ROOT', __DIR__ );
define('DS', DIRECTORY_SEPARATOR);


function loadClasses($ClassName) { // Функция загрузчик
    $classNameArr = explode('_', $ClassName);
    if (count($classNameArr) == 2) {
        $ClassFilePath = APP_ROOT . DS . 'classes' . DS . $classNameArr[0] . DS . $classNameArr[1] . '.php';
        if (file_exists($ClassFilePath)) {
            echo "<p>executing __aturoload() with aClassName = {$ClassName}</p>";
            require_once $ClassFilePath;
            return true;
        }
    } else {
        $ClassFilePath = APP_ROOT . DS . 'classes' . DS . $classNameArr[0] . '.php';
        if (file_exists($ClassFilePath)) {
            echo "<p>executing __aturoload() with aClassName = {$aClassName}</p>";
            require_once $ClassFilePath;
            return true;
        }
    }



    return false;
}

spl_autoload_register('loadClasses'); // Регистрация функции загрузчика


$obj = new Auto_BMW();
echo $obj->carName = 'BMW' . '<br>';
echo $obj->model = 'M3';

//$obj2 = new Auto_Audi();
//
//
//
//var_dump($obj);
//
//var_dump($obj2);
//
//var_dump(spl_autoload_functions());

class A {
    public $name = 'User';
    public $age = 10;
    protected $sex = '';
    public function changeSex ($sex) {
        return $this -> sex = $sex;
    }
}

$a = new A();
$a->name = 'Eugene';
$a->age = 29;
$a->secondName = 'Davidoff';
$sex = 'changeSex';
$a->$sex('Male');
var_dump($a);
$b = $a;
echo $b->name;