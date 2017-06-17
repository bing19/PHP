<?php


class Eat
{
    public $name;
    public $weight;

   public function __construct($name, $weight)
   {
       $this->name = $name;
       $this->weight = $weight;
   }

    public function getName()
    {
        return $this->name;
    }


    public function getWeight()
    {
        return $this->weight;
    }
}