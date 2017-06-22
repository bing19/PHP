<?php


class classes_Calc
{
    public $x;
    public $y;
    protected $res;

    public function calc ($x, $y, $operation) {
        $this->x = (int) $x;
        $this->y = (int) $y;

        switch ($operation) {
            case '+':
                return $this->res = $this->x + $this->y;
                break;
            case '-':
                return $this->res = $this->x - $this->y;
                break;
            default:
                return $this->res = null;
                break;
        }

    }

    public function getResalt () {
        return $this->res;
    }

}