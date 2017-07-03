<?php

function getPost () {
    $data = [];
    $handler = fopen(APP_ROOT . DS . 'db.txt', 'r');
    while (!feof($handler)) {
        $buffer = fgets($handler);
        $arr = explode('|||', $buffer);
        if(sizeof($arr) !== 1) {

            $data[] = ['date' => $arr[0], 'name' => $arr[1], 'message' => $arr[2]];
        }
    }
    fclose($handler);

       return $data;
}

function writePost ($post) {
    $postdate = ['date' => date("F j, Y, g:i a")];
    $data = array_merge($postdate, $post);
    $handler = fopen(APP_ROOT . DS . 'db.txt', 'a+');
    $data = implode('|||', $data) . PHP_EOL ;
    fwrite($handler, $data);
    fclose($handler);
}
?>