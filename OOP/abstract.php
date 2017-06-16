<?php

abstract class Animal {
    private $name;

    public function __construct($name) {
        $this -> name = $name;
    }

    public function getName() {
        return $this->name;
    }

    abstract public function say ();
}

class Cat extends Animal {
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function say()
    {
        return 'Mew-Mew';
    }
}

class Dog extends Animal {
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function say()
    {
        return 'Woof-Woof';
    }
    public function sayMew (Cat $cat) {
        echo 'Dog say ' . $cat->say() . ' like a cat';
    }

}

$cat = new Cat('Flaphy');
echo $cat ->say();
echo $cat ->getName();

$dog = new Dog('Sparky');
echo $dog -> say();
echo $dog->getName() . '<br>';
echo $dog->sayMew($cat);