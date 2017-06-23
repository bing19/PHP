<?php
setlocale(LC_ALL, 'ru_RU.UTF-8');

include_once 'autoloader.php';

$citys = ['Херсон', 'Одесса', 'Киев', 'Днепропетровск', 'Крым', 'Львов', 'Харьков'];

function getCity ($letter, $citys) {
    $char = mb_strtoupper($letter);
    foreach ($citys as $city) {
        $new[] = iconv('UTF-8', 'Windows-1251' , $city);
    }
    foreach ($new as $value) {

        if (stristr($value[0], iconv('UTF-8', 'Windows-1251' , $char))) {
            return $value;
        }
    }
}


echo getCity ('л', $citys);

