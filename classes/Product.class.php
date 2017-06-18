<?php

/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 17.06.17
 * Time: 16:48
 */
class Product
{
    protected $name;
    protected $price;
    protected $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName() {
        return $this->name;
    }

}
