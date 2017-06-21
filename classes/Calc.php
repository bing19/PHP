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

    public function calc ($operation) {
        switch ($operation) {
            case '+':
                return $this->res = $this->x + $this->y;
                break;
            case '-':
                return $this->res = $this->x - $this->y;
                break;
        }

    }

    public function getResalt () {
        return $this->res;
    }

}