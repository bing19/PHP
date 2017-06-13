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

$a = 2;

switch($a) {
    case 1:
        echo 1;

    case 2:
        echo 2;

    case 3:
        echo 3;

    case 4:
        echo 4;

    case 5:
        echo 5;

    case 6:
        echo 6;

    case 7:
        echo 7;

    case 8:
        echo 8;

    case 9:
        echo 9;

}

echo '<br>';

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

echo power(4, 4);

echo '<br>';

//Написать функцию, которая принимают в качестве аргументов два числа и вычисляет из них большее. Написать такую же функцию, чтобы она вычисляла меньшее число.

function maxNum($a, $b) {
    $result = 0;
    if ($a > $b) {
        $result = $a;
    } elseif ($a < $b) {
        $result = $b;
    } else {
        $result = 'Числа равны';
    }

    return $result;
}

function minNum($a, $b) {
    $result = 0;
    if ($a < $b) {
        $result = $a . ' меньше ' . $b;
    } elseif ($a > $b) {
        $result = $b . ' меньше ' . $a;
    } else {
        $result = 'Числа равны';
    }

    return $result;
}

echo maxNum(10, 2);
echo '<br>';
echo maxNum(5, 15);
echo '<br>';
echo maxNum(10, 10);
echo '<br>';

echo minNum(10, 2);
echo '<br>';
echo minNum(5, 15);
echo '<br>';
echo minNum(10, 10);
echo '<br>';

function math ($a, $b)
{

    $result = 0;
    if (($a * $b > 100) && ($a * $b < 1000)) {
        if ($a > $b) {
            $result = $a - $b;
        } elseif ($a < $b) {
            $result = $b - $a;
        } else {
            $result = 'Числа равны';
        }

    } elseif ($a * $b > 1000) {
        $result = $a * $b / maxNum($a, $b);
    }

    return $result;
}

echo math (100,12);
