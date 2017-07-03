<?php
include_once 'autoloader.php';

$guestbook = new class_GuestBook();
$guestbook->appendData($_POST);

header("location: /");