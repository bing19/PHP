<?php

include_once 'autoloader.php';
$data = "sdfasfafadsfdsfadsfadsf";

$obj = classes_StorageFactory::factoryStorage();
echo $obj->write('Product_sku', $data);
