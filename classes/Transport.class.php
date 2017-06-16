<?php


class Transport
{
    public $color;
    public $speed;
    public $brand;

    public function __construct($speed)
    {
        $this -> speed = $speed;
    }


    public function tripTime ($distance) {
        $time = $distance / $this ->speed;
        return $time . ' час(а)';
    }
}