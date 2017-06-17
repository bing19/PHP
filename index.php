<?php

include_once 'autoloader.php';

$config = new Config(180, 120);
var_dump($config);
$refreg = new Refreg('BOSH', $config);
echo $refreg->getMaxFreshWeigth();
$apple = new Eat('apple', 10);
$refreg->addFreshEat($apple);
echo $refreg->getMaxFreshWeigth();
var_dump($refreg->lookStorage());
