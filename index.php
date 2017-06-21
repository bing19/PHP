<?php

include_once 'autoloader.php';

$data = 'dsfaffdfadfdfdfdfdaf';

$f = classes_StorageFactory::factoryStorage();
echo $f->write('Product_price', 500);


