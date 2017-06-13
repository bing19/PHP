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





function getComponents ($name) {
    $file = APP_ROOT . DS . 'file' . DS . 'components.csv';
    $hendler = fopen($file, 'r');

    while (false !== ($data = fgets($hendler))) {
        $components[] = explode("\r\n", $data);

    }
    $e = [];
    foreach ($components as $value){
        if (is_array($value)) {
            foreach ($value as $compon) {
                $arr = explode(';', $compon); //Вся суть в скобке. Почитай про это еще.
                $e [$arr[0]] = ['Quantity' => $arr[1], 'Price' => $arr[2]];
            }
        }
    }
//    $data = [
//        'Тесто' => ['Quantity' => 10, 'Price' => 5],
//         'Сыр' => ['Quantity' => 10, 'Price' => 5]
//    ];
   return $e[$name];
}

function getAllComponents () {
    $file = APP_ROOT . DS . 'file' . DS . 'components.csv';
    $hendler = fopen($file, 'r');
    $components = [];
    while (false !== ($data = fgets($hendler))) {
        $components[] = explode("\r\n", $data);

    }
    $e = [];
    foreach ($components as $value){
        if (is_array($value)) {
            foreach ($value as $compon) {
                $arr = explode(';', $compon);
                $e [$arr[0]] = ['Quantity' => $arr[1], 'Price' => $arr[2]];
            }
        }
    }
//    $data = [
//        'Тесто' => ['Quantity' => 10, 'Price' => 5]
//    ];
    return $e;
}


function getPizzaComponents ($pizza) {

    $file = APP_ROOT . DS . 'file' . DS . 'pizza.csv';
    $hendler = fopen($file, 'r');
    $e = [];
    while (false !== ($data = fgets($hendler))) {
        $components[] = explode("\r\n", $data);

        foreach ($components as $value) {
           if (is_array($value)) {
              foreach ($value as $pizzacomp) {
                  $arr = explode(';', $pizzacomp);

                  switch (count($arr)) {
                      case 7:
                          $e[$arr[0]] = [$arr[1] => $arr[2], $arr[3] => $arr[4], $arr[5] => $arr[6]];
                          break;
                      case 9:
                          $e[$arr[0]] = [$arr[1] => $arr[2], $arr[3] => $arr[4], $arr[5] => $arr[6], $arr[7] => $arr[8]];
                          break;
                  }
              }

           }
        }


    }

        return $e[$pizza];
}

//var_dump(getPizzaComponents ('Морская'));

function checkComponents ($pizza, array $dobavki = []) {
    $components = getPizzaComponents($pizza);
    $components = array_merge($components, $dobavki);
    foreach ($components as $comName => $compQuantity) {
        $sklad = getComponents($comName);
        if ($sklad['Quantity'] < $compQuantity) {
                return false;
        }

    }
    return true;
}




//var_dump(checkComponents ('Морская', ['Соус' => 1]));



function updateComponents ($pizza, $dobavki) {
    $pizzaComponent = array_merge(getPizzaComponents ($pizza), $dobavki);
    $component = getAllComponents();
    foreach ($pizzaComponent as $key => $value) {
        $component[$key]['Quantity'] -= $pizzaComponent[$key];
        if ($component[$key]['Quantity'] <= 0) {
            echo $key . ' Закончился' . '<br>';
        }
    }
    $content = '';
    foreach ($component as $name => $param) {
        $content .= $name . ';' . implode(';', $param);
    }

    $file = APP_ROOT . DS . 'file' . DS . 'components.csv';
    $hendler = fopen($file, 'w+');
    fwrite($hendler, $content);

}

//updateComponents('Маргарита', ['Соус' => '2']);


function getPizzaPrice ($pizza, $dobavki) {
    $pizzaComponent = getPizzaComponents($pizza);
    $pizzaComponent = array_merge($pizzaComponent, $dobavki);
    settype($pizzaComponent['Соус'], 'string');
    $components = getAllComponents();

    $price = 0;
    foreach ($pizzaComponent as $key => $value) {
      $price += $components[$key]['Price'] * $value;

    }
    return $price;
}

function makePizza ($pizza, $dobavki = []) {
    if (checkComponents ($pizza, $dobavki) == true) {
        updateComponents ($pizza, $dobavki);
        return getPizzaPrice($pizza, $dobavki) . '$';
    } else {
        return 'Данная пицца закончилась';
    }
}

//echo makePizza('Маргарита');

//echo getPizzaPrice ('Маргарита', ['Соус' => 1]);

//var_dump(updateComponents('Морская',['Соус' => 1]));