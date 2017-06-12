<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 12.06.17
 * Time: 22:27
 */

class A {
    public $name = 'User';
    public $age = 10;
    protected $sex = '';
    public function changeSex ($sex) {
        return $this -> sex = $sex;
    }
}

$a = new A();
$a->name = 'Eugene';
$a->age = 29;
$a->secondName = 'Davidoff';
$sex = 'changeSex';
$a->$sex('Male');
var_dump($a);
$b = $a;
echo $b->name;