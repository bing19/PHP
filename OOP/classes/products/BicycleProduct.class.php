<?php
class products_BicycleProduct extends products_BaseProduct {
    public $numberOfWeels = 2;
    public $fаrameType;

   public function __construct($name, $price, $title, $description)
   {
       parent::__construct($name, $price, $title, $description);
   }
}