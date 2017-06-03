<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 31.05.17
 * Time: 21:42
 */


#определяем наши функции приложения, имеет смысл вынести в отдельный файл
#понадобится 3 функции
# 1. сгенерировать данные
# 2. записать в файл
# 3.  прочитать файл

/**
 * Сгенерировать данные и возвратить в массиве
 *
 * @param string $dataType - тип данных string,numbers,numbers+string
 * @param int $size - размер
 * @param int $length
 * @return array
 */


function genArray ($size, $length, $type = null, $customeChar = '') {
    if (!empty($customeChar)) {
        $sm = $customeChar;
    } else {
        $type = mb_strtolower($type);
        switch ($type) {
            case 'string':
                $sm = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                break;
            case 'int':
                $sm = '1234567890';
                break;
            case 'hex':
                $sm = '01';
                break;
            default: $sm = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        }
    }

    $strMax = strlen($sm) - 1;
    $result = [];
    for($i = 0; $i < $size; $i++) {
        $value = '';
        for($j = 0; $j < $length; $j++) {
            $value .= $sm[rand(0, $strMax)];
        }
        $result[] = $value;

    }
    return $result;
}

function writeContent ($file, $data) {
    $handle = fopen($file, 'a+');
    fwrite($handle, $data . "\n");
    fclose($handle);
}

function readContent ($file, $separator = "\n", $length = 5) {
    $handle = fopen($file, 'r');
    $result = '';
    $lineCounter = 0;
    while (false !== ($data = fgets($handle)) && $lineCounter < $length ) {
        $result .= $data . $separator;
        $lineCounter++;
    }
    fclose($handle);
    return $result;
}



//$data = [1,2,3,4,5,6,7];
//$ran = range(0, 10);
//
//$arr = '';
//foreach ($ran as $k) {
//    $arr .= $k;
//}
//var_dump($arr);