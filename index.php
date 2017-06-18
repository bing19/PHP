<?php

include_once 'autoloader.php';

$phone = new Product('Nexus', 500, 10);
$iphone  = new Product('iphone', 1000, 5);
$cart = new Cart();
$cart->addProduct($phone, 3);
$cart->addProduct($iphone, 1);
var_dump($cart->items);
$cart->removeProduct($phone, 1);
$cart->removeProduct($phone, 1);

var_dump($cart->items);