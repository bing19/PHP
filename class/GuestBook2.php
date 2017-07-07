<?php


class class_GuestBook2
{
    protected $file;


    public function __construct($file)
    {
        $this->file = $file;
    }

    public function getAllPost () {
        $handler = fopen($this->file, 'r');
        $obj = [];
        while (!feof($handler)) {
            $buffer = fgets($handler);
            $arr = explode('|||', $buffer);
            $obj[] = new class_GuestBookPost($arr[0], $arr[1], $arr[2], $arr[3]);
        }
        fclose($handler);

        return $obj;
    }


}

