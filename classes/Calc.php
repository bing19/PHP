<?php


class classes_Calc
{
    public $x;
    public $y;
    protected $res;

   public function setXY ($x, $y) {
       $this->x = $x;
       $this->y = $y;
       return $this;
   }

    public function calc () {
        return $this->res = $this->x + $this->y;
    }

    public function getResalt () {
        return $this->res;
    }

}