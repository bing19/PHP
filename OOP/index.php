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


$product = new products_BaseProduct('Good model #555656', 500, 'Find where you can bougth Good model #555656?', 'The Good model #555656 is the most popular smartphone in the world');
echo $product->name . '<br>';
echo 'Price is ' . $product->price . '$' . '<br>';
echo $product->description . '<br>';
echo 'Размер фото для Стандартного товара ' .$product->getImageSize() . '<br>';
echo $product->getConstant() . '<br>';

echo '++++++++++++++ <br>';


$phone = new products_PhoneProduct('Iphone 7', 1000, '2300x1200');
echo $phone->name . '<br>';
echo 'Price is ' . $phone->getPrice() . '$' . '<br>';
echo $phone->display . '<br>';
echo 'Размер фото для товара Телефон ' . $phone->getImageSize() . '<br>';

var_dump($phone instanceof products_BaseProduct);


echo '++++++++++++++ <br>';

$bicycle = new products_BicycleProduct('BMX', 2000, 'BMX', 'This is a trial bicycle');
echo $bicycle->name . '<br>';
echo 'Price is ' . $bicycle->price . '$' . '<br>';
echo $bicycle->description . '<br>';

$cellPhone = new products_PhoneProduct('Nexus', 400 , '3000x2000' );

var_dump($cellPhone instanceof products_BaseProduct);

