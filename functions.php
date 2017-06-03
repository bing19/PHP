<?php

/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 30.05.17
 * Time: 08:24
 */
header("Content-Type: text/html; charset=utf-8");

define('FILE_PATH', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

$directory = FILE_PATH . DS . 'file' . DS;


function read_file ($filePath) {

    $f = fopen($filePath, 'r');
    $length = filesize($filePath);
    $content  = fread($f, $length);
    $content = str_replace(array("\r","\n"),"",$content);
    $content = substr($content, 0, -1);
    $content = explode('|', $content);
    $content = array_chunk($content, 3);

    fclose($f);

    return var_dump($content);
}

function write_file ($filePath ,array $arr) {
    $f = fopen($filePath, 'a');
    function get_string ($arr) {
        $content = '';


        foreach ($arr as $v) {
            if (is_array($v)) {
                $content .= implode('|', $v) . '|' . "\n";


            }

        }
      return $content;
    }
    fwrite($f, get_string ($arr));
    fclose($f);
}

//function read_file ($filePath) {
//
//
//    $f = fopen($filePath, 'r');
//    $length = filesize($filePath);
//
//    $content  = fread($f, $length);
//    $fileData  =   mb_split("\n", $content);
//    $content = [];
//    foreach ($fileData as $key => $client) {
//        $content['Client_'. ($key + 1)] = $client;
//    }
//
//
//    fclose($f);
//
//    return var_dump($content);
//}



//function writeF ($file){
//    $f = fopen($file, 'a+t');
//    fwrite($f, 'Евгений|Давыдов|05049067178' . "\n");
//    fclose($f);
//}

//writeF($file);




