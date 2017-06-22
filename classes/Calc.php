<?php


class classes_Calc
{
    public $x;
    public $y;
    public $validOperation = ['+', '-', '*', '/'];
    protected $operation;
    protected $res;

    public function calc ($x, $y, $operation) {
        $this->x = (int) $x;
        $this->y = (int) $y;
        $this->operation = $operation;

        if (in_array($this->operation, $this->validOperation)) {
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
        } else {
            return null;
        }



    }

    public function getResalt () {
        return $this->res;
    }

}