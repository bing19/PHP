<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 03.06.17
 * Time: 19:18
 */
//
//Объявите в начале скрипта две целочисленных переменных $a и $b, начальные
//значения определите с помощью констант. Написать скрипт:
//a. если $a и $b положительные – выведите их сумму.
//b. если $а и $b отрицательные – выведите из разность.
//c. если $а и $b разных знаков – выведите их произведение.
//Ноль можно считать положительным числом.


define('A', 10);
define('B', 50);
$a = A;
$b = B;

if($a >= 0 && $b >= 0) {
    echo $a + $b . '<br>';
} elseif ($a < 0 && $b < 0) {
    echo $a - $b . '<br>';
} elseif (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0) ) {
    echo $a * $b . '<br>';
}

echo $a . '<br>';


//Выведите большее из чисел используя тернарный оператор.

$result = $a > $b ? $a : $b;

echo $result . '<br>';

//Присвойте $а значение в промежутке [0..9]. С помощью оператора switch
//организуйте вывод чисел от $a до 9;

$a = 7;

switch($a) {
    case 1:
        echo 'One';
        break;
    case 2:
        echo 'Two';
        break;
    case 3:
        echo 'Three';
        break;
    case 4:
        echo 'Four';
        break;
    case 5:
        echo 'Five';
        break;
    case 6:
        echo 'Six';
        break;
    case 7:
        echo 'Seven';
        break;
    case 8:
        echo 'Eight';
        break;
    case 9:
        echo 'Nine';
        break;
}


//Реализуйте все арифметические операции в виде функций с двумя параметрами.

function sum ($a, $b) {
   echo $a + $b;
}

function multiple ($a, $b) {
    echo $a * $b;
}

sum($a, $b);

echo '<br>';
//Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2,
//                                                               $operation), где $arg1, $arg2 – значения аргументов. $operation – строка с названием
//операции. В зависимости от переданного значения операции выполните одну из
//арифметических операций (используйте функции из пункта 4) и верните
//полученное значение (используйте switch).


function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case '+':
           echo $arg1 + $arg1;
            break;
        case '*':
            echo $arg1 * $arg2;
            break;
    }
}

mathOperation($a, $b, '*');

echo '<br>';
//С помощью рекурсии организуйте функцию возведения числа в степень. Формат:
//function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val, $pow)
{
    if ($pow == 0) {
        return 1;

    } else {
        return $val * power($val, $pow-1);
    }
}

echo power(2, 3);