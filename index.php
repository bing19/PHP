<?php
setlocale(LC_ALL, 'ru_RU.UTF-8');

include_once 'autoloader.php';
include 'config.php';
$post = $guestbook->getAllPost();
$postView = new class_View();
foreach ($post as $obj) {

    if($obj instanceof class_GuestBookPost) {
        $postView->assign('guestbook', $obj);
    }
}

include 'template/guestbook.php';




//include 'template/guestbook.php';


//var_dump($guestbook->data);
//if (isset($_GET[GET_ACTION])) {
//    $guestbook->delete($_GET['id']);
//}


?>


