<?php


class classes_StorageFile1 extends classes_Storage implements interface_iStorage
{
    protected $file = 'file1.csv';
    protected $separator = '*|||*';
    
    public function write ($key, $value) {
        $line = $key . $this->separator . $value;
       $handler = fopen($this->path . $this->file, 'a+');
        fwrite($handler, $line . "\n");
        fclose($handler);
        return 'Данные записаны';
    }


}