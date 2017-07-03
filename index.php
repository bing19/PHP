<?php
setlocale(LC_ALL, 'ru_RU.UTF-8');

include_once 'autoloader.php';
$guestbook = new class_GuestBook();
include 'template/guestbook.php';

?>


