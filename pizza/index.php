<?php
    $pizza = ['Маргарита', 'Морская'];
    $dobavki = ['Соус'];

    define('APP_ROOT', __DIR__);
    define('DS', DIRECTORY_SEPARATOR);
    include APP_ROOT . DS . 'func.php';
    define('ACTION_DEFAULT', 'form');
    define('ACTION_CHEKCOMP', 'price');
    define('ACTION_MAKEPIZZA', 'makepizza');

    //Выполняет проверку на то что находиться в адресной строке, и записываем значение в переменную $action
    if (!empty($_POST['Pizza'])) {
        $action = ACTION_CHEKCOMP;


    } elseif (!empty($_POST) && $_POST['Order'] ) {
        $action = ACTION_MAKEPIZZA;
    }else {
        $action = ACTION_DEFAULT;
    }

    switch($action) {
     
        case ACTION_CHEKCOMP:
            include APP_ROOT . DS . 'tpl' . DS . 'price.phtml';
            break;
        case ACTION_MAKEPIZZA:
            include APP_ROOT . DS . 'tpl' . DS . 'success.phtml';
            break;
        default:
            include APP_ROOT . DS . 'tpl' . DS . 'form.phtml';
            break;
    }



?>

