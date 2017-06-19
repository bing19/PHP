<?php


abstract class classes_Storage
{
    protected $isMinify = false;
    protected $path = APP_ROOT . DS . 'file' . DS;
//    abstract public function read ($key);

    public function minify ($value) {
        $value = strtoupper($value);
        return $value;
    }

    public function _write ($key, $value) {

    }
    public function write ($key, $value) {
        if($this->isMinify) {
            $value = $this->minify($value);
        }
        $this->_write($key, $value);
    }

}