<?php

function getPost () {
    $data = [];
    $handler = fopen(APP_ROOT . DS . 'db.txt', 'r');
    while (!feof($handler)) {
        $buffer = fgets($handler);
        $arr = explode('|||', $buffer);
        $data[] = ['date' => $arr[0], 'name' => $arr[1], 'message' => $arr[2]];
        var_dump($data);
    }
    fclose($handler);


    return $data;
}

function writePost ($post) {
    $postdate = ['date' => date("F j, Y, g:i a")];
    $data = array_merge($postdate, $post);
    $handler = fopen(APP_ROOT . DS . 'db.txt', 'a+');
    $data = implode('|||', $data) . "\r";
    fwrite($handler, $data);
    fclose($handler);

    var_dump($data);
}
?>