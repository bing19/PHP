<?php

class class_GuestBookPost
{
    protected $message;
    protected $name;
    protected $id;
    protected $date;

    public function __construct($id, $date, $name, $message)
    {
        $this->message = $message;
        $this->name = $name;
        $this->date = $date;
        $this->id = $id;
    }

    public function getName () {
        return $this->name;
    }
    public function getMessage () {
        return $this->message;
    }

}