<?php

include_once 'autoloader.php';

$data = 'dsfaffdfadfdfdfdfdaf';
$conf = new config_config();
$f = classes_StorageFactory::factoryStorage($conf);
echo $f->write('Product_price', 500);


