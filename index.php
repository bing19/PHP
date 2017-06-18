<?php

include_once 'autoloader.php';

$config = new Config(180, 120);
$frozen = Refregerator::getInstance();
Refregerator::getInstance();
echo $frozen->checkObj();
echo $frozen->checkObj();
echo $frozen->checkObj();
var_dump($frozen);