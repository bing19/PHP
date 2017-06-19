<?php

include_once 'autoloader.php';

$data = 'dsfaffdfadfdfdfdfdaf';

$f = StorageFactory::factoryStorage();
echo $f->write($data);

