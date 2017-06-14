<?php

interface phoneInterface {
    public function getPrice();

}


class products_PhoneProduct extends products_BaseProduct implements phoneInterface {
    public $display;

    function __construct($name, $price, $display)
    {
        $this->name = $name;
        $this->price = $price;
        $this->display = $display;
    }

    public function getImageSize() {
        $img = explode('x', self::$imageSize);
        $arr = [];
        foreach ($img as $value) {
            $arr[] = $value + 400;
        }
        self::$imageSize = implode('x', $arr);
        return self::$imageSize;
    }


    public function getPrice()
    {
        return $this->price;
    }
}