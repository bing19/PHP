<?php

define('APP_ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

function getComponents ($name) {
    $file = APP_ROOT . DS . 'file' . DS . 'comp.csv';
    $handler = fopen($file, 'r');
    $components = [];
    $newArr = [];

    while (false !== $comp = fgets($handler)) {
        $components[] = explode("\n\r", $comp);
    }
    foreach ($components as $value) {

        if(is_array($value)) {
            foreach ($value as $com) {
                $arr = explode (';', $com);
                $newArr[$arr[0]] = ['Quantity' => $arr[1], 'Price' => $arr[2]];
            }
        }

    }

    return $newArr[$name];

}


getComponents('Тесто');


function checkComponents($pizza, $dobavki) {
    $pizzaComp = getPizzaComponents($pizza);
    $pizzaComponents = array_merge($pizzaComp, $dobavki);
    foreach ($pizzaComponents as $comName => $compQuantity) {

        $sklad = getComponents($comName);
        if ($sklad['Quantity'] < $compQuantity) {
            return false;
        }

    }
    return true;
}

function num1() {
    return '1111111';
}

function num2 () {
    return '222222';
}

function num3 ($var1 , $var2) {
    echo $var1 . '<br>' . $var2;
}

num3(num1(), num2());