<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 03.06.17
 * Time: 17:07
 */

//Данные по пицце:
//Маргарита:
//        - тесто - 2 шт.
//        - сыр - 1 шт.
//        - начинка - 1шт.
//Морская:
//        - мацонез - 3 шт.
//        - осьминог - 5 шт.
//        - креветка - 10 шт.

//Склад:
//        - Тесто - 20 шт - 1$;
//        - Cыр - 15 шт - 5$;
//        - Начинка - 10 шт - 6$;
//Добавки:
//        -грибы - 20 - 5$;
//        - соус - 30 - 2$;

//Нужно написать функции:
//getComponents ($componentName); должен вернуть массив [Количество => 10, Цена => 5]
//createPizza($pizzaName, $dobavki);
//checkComponents ($componentName, $dobavki);
//getPrice ($pizzaName, $dobavki);

define('APP_ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);



function getComponents ($name = null) {
    $file = APP_ROOT . DS . 'file' . DS . 'components.csv';
    $hendler = fopen($file, 'r');
    $components = [];
    while (false !== ($data = fgets($hendler))) {
        $components[] = explode("\r\n", $data);

    }
    $comp = [];
    foreach ($components as $value){
        if (is_array($value)) {
            foreach ($value as $compon) {
                $arr = explode(';', $compon);



                ]);
            }
        }
    }

//    $data = [
//        'Тесто' => ['Quantity' => 10, 'Price' => 5]
//    ];



    var_dump($comp);
}

getComponents('Тесто');