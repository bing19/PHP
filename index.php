<?php

include_once 'autoloader.php';

$data = 'dsfaffdfadfdfdfdfdaf';
$conf = new Config();
$f = StorageFactory::factoryStorage($conf);
echo $f->write($data);

