<?php

class products_BaseProduct {

    const AVAILABLE = 'InStock';

    public $name;
    public $price;
    public $title;
    public $description;
    protected static $imageSize = '800x800';


    public function __construct($name, $price, $title, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->title = $title;
        $this->description = $description;

    }

    public function getImageSize() {
        return self::$imageSize;
    }

    public function getConstant() {
        return self::AVAILABLE;
    }

}
