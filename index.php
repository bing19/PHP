<?php

include_once 'autoloader.php';

$images = include APP_ROOT . DS . 'data.php';

include 'template/gallery.php';


function getImg ($img) {
    $count = 4;
    if(!empty($img)) {
        $uploaded = $img['newimage'];
        var_dump($uploaded);
        $count++;
        if($uploaded['error'] == 0) {
            move_uploaded_file($uploaded['tmp_name'], APP_ROOT . DS . 'img' . DS . 'img' . $count . '.jpg');

        }
    }
}

getImg ($_FILES);


?>

