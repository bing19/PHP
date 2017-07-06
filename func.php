<?php
include_once 'autoloader.php';
function getPost ()
{
    $data = [];
<<<<<<< HEAD
    $handle = fopen(APP_ROOT . DS . 'db.txt', "r");
    while (!feof($handle)) {
        $buffer = fgets($handle);
        $components[] = explode("\n", $buffer);
=======
    $handler = fopen(APP_ROOT . DS . 'db.txt', 'r');
    while (!feof($handler)) {
        $buffer = fgets($handler);
        $arr = explode('|||', $buffer);
        if(sizeof($arr) !== 1) {

            $data[] = ['date' => $arr[0], 'name' => $arr[1], 'message' => $arr[2]];
        }
>>>>>>> 35434f3c2dc56c406b04c6cc63a4571a1fbf4408
    }
    fclose($handle);
    var_dump($components);


<<<<<<< HEAD
//        $data[] = ['date' => $arr[0], 'name' => $arr[1], 'message' => $arr[2]];
    return $components;

=======
       return $data;
>>>>>>> 35434f3c2dc56c406b04c6cc63a4571a1fbf4408
}

getPost ();
function writePost ($post) {
    $postdate = ['date' => date("F j, Y, g:i a")];
    $data = array_merge($postdate, $post);
<<<<<<< HEAD
    $handler = fopen(APP_ROOT . DS . 'db.txt', 'a');
    $data = implode('|||', $data) . "\n";
    
=======
    $handler = fopen(APP_ROOT . DS . 'db.txt', 'a+');
    $data = implode('|||', $data) . PHP_EOL ;
>>>>>>> 35434f3c2dc56c406b04c6cc63a4571a1fbf4408
    fwrite($handler, $data);
    fclose($handler);
}
?>