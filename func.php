<?php
include_once 'autoloader.php';
function getPost ()
{
    $data = [];
    $handle = fopen(APP_ROOT . DS . 'db.txt', "r");
    while (!feof($handle)) {
        $buffer = fgets($handle);
        $components[] = explode("\n", $buffer);
    }
    fclose($handle);
    var_dump($components);


//        $data[] = ['date' => $arr[0], 'name' => $arr[1], 'message' => $arr[2]];
    return $components;

}

getPost ();
function writePost ($post) {
    $postdate = ['date' => date("F j, Y, g:i a")];
    $data = array_merge($postdate, $post);
    $handler = fopen(APP_ROOT . DS . 'db.txt', 'a');
    $data = implode('|||', $data) . "\n";
    
    fwrite($handler, $data);
    fclose($handler);

    var_dump($data);
}
?>