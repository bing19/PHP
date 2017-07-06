<?php


abstract class class_Book
{
    protected $dbpath = APP_ROOT . DS;
    protected $db = 'db.txt';
    public $data = [];

    abstract public function getData ();
    abstract public function save ();

}