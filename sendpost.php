<?php
include_once 'autoloader.php';
define('GET_ACTION', 'action');
define('ACTION_DELETE', 'delete');

$guestbook = new class_GuestBook();
$guestbook->changeId();
$guestbook->appendData($_POST);

if (isset($_GET[GET_ACTION])) {
    $guestbook->delete($_GET['id']);
}

header("location: /");