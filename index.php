<?php

include_once 'autoloader.php';

$phone = new Product();
$phone->setName('Nexus')
    ->setPrice(500)
    ->setQuantity(10);

$cart = new Cart();
$cart->addProduct($phone, 3);
var_dump($cart->items);
$cart->removeProduct($phone, 1);
$cart->removeProduct($phone, 2);

var_dump($cart->items);