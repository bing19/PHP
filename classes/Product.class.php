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

//    public function __construct($name, $price, $quantity)
//    {
//        $this->name = $name;
//        $this->price = $price;
//        $this->quantity = $quantity;
//    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }
    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

}
