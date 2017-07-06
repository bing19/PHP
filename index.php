<?php
setlocale(LC_ALL, 'ru_RU.UTF-8');

include_once 'autoloader.php';
include 'config.php';


include 'template/guestbook.php';


//var_dump($guestbook->data);
if (isset($_GET[GET_ACTION])) {
    $guestbook->delete($_GET['id']);
}

?>


