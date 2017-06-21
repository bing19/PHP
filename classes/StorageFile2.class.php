<?php


class StorageFile2 extends Storage
{
    public $file = APP_ROOT . DS . 'file' . DS . 'file2.csv';

    public function write ($data) {
       $handler = fopen($this->file, 'a+');
        fwrite($handler, $data . "\n");
        fclose($handler);
        return 'Данные записаны';
    }

    public function file () {
        var_dump($this->file);
    }


}