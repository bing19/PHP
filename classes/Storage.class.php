<?php


abstract class Storage
{
        private $file_path = APP_ROOT . DS . 'file' . DS;
//    public const ds = DIRECTORY_SEPARATOR;

    abstract protected function write ($data);
    public function getFilePath () {
        return $this->file_path;
    }

}