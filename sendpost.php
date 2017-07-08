<?php
include_once 'autoloader.php';
include 'config.php';
//define('GET_ACTION', 'action');
//define('ACTION_DELETE', 'delete');

$post = new class_GuestBookPost($_POST['name'], $_POST['message']);
$guestbook->getAllPost();
$guestbook->appendData($post);


//$guestbook = new class_GuestBook();
//$guestbook->changeId();
//$guestbook->appendData($_POST);

//if (isset($_GET[GET_ACTION])) {
//    $guestbook->delete($_GET['id']);
//}

header("location: /");