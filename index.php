<?php

include_once 'autoloader.php';

$config = new Config(180, 120);
$refreg = new Refreg('BOSH', $config);

$apple = new Eat('apple', 10);
$banan = new Eat('banan', 5 );
$meet = new Eat('meet', 50);
$refreg->addFreshEat($apple);
$refreg->addFreshEat($banan);
$refreg->addFreshEat($banan);
$refreg->addFreshEat($meet);
$refreg->addFreshEat($meet);
$refreg->addFreshEat($meet);
$refreg->addFreshEat($meet);
$refreg->addFreshEat($meet);
echo 'В холодильнике осталось свободного места объемом ' . $refreg->getMaxFreshWeigth() . '<br>';
var_dump($refreg->lookStorage());
