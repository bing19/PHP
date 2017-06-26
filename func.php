<?php

function getData () {
    $data = [];
    $handler = fopen(APP_ROOT . DS . 'db.txt', 'r');
    $count = 0;
    while (!feof($handler)) {
        $count++;
        $line = fgets($handler);
        $data[$count] = $line;
    }
    return $data;
}

function getImg ($img) {

    $uploaded = $img['newimage'];
    if($uploaded['error'] == 0) {
        move_uploaded_file($uploaded['tmp_name'], APP_ROOT . DS . 'img' . DS . $uploaded['name']);
        $handler = fopen(APP_ROOT . DS . 'db.txt', 'a+');
        fwrite($handler, "\n" . $uploaded['name']);
        fclose($handler);

    }



}

return getData();
?>