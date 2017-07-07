<?php

class class_GuestBookPost
{
    protected $message;
    protected $name;
    protected $id;
    protected $date;

    public function __construct($name, $message)
    {
        $this->message = $message;
        $this->name = $name;
    }

    public function getName () {
        return $this->name;
    }
    public function getMessage () {
        return $this->message;
    }
    public function getPostId () {
        return $this->id;
    }
    public function getPostDate () {
        return $this->date;
    }
    public function setId ($id) {
        $this->id = $id;
    }
    public function setDate ($date) {
        $this->date = $date;
    }

}