<?php


class StorageFile1 extends Storage
{
    private $file = APP_ROOT . DS . 'file' . DS . 'file1.csv';
    public function write ($data) {
       $handler = fopen($this->file, 'a+');
        fwrite($handler, $data . "\n");
        fclose($handler);
        return 'Данные записаны';
    }


}