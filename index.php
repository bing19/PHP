<?php

include_once 'autoloader.php';

$config = new Config(180, 120);
$frozen = Refregerator::getInstance();
Refregerator::getInstance();
echo $frozen->checkObj();
echo $frozen->checkObj();
echo $frozen->checkObj();
$forz = Refregerator::getInstance();
echo $forz->checkObj();


//$holod = clone $forz; // Если открыть функцию клонирования, то клон создастся с текущими значниями объекта который клонируем
//echo $holod->checkObj();
var_dump($forz);
