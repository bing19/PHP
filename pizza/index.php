<?php
    $pizza = ['Маргарита', 'Морская'];
    $dobavki = ['Соус'];

    define('APP_ROOT', __DIR__);
    define('DS', DIRECTORY_SEPARATOR);
    include APP_ROOT . DS . 'func.php';


if(!empty($_POST['Pizza'])) {
        include APP_ROOT . DS . 'tpl' . DS . 'price.phtml';
    } else {
        include APP_ROOT . DS . 'tpl' . DS . 'form.phtml';
    }

    var_dump($_POST);
?>
