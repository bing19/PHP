<?php
setlocale(LC_ALL, 'ru_RU.UTF-8');

include_once 'autoloader.php';

include 'func.php';

$images = getData();
include 'template/gallery.php';








?>


