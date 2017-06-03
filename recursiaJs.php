<?php

//Рекурсивно вывести строками эелементы массива
$data = [
    'Я',
    'Люблю',
    'Пить',
    'Чай'
];

function arrRecurs ($arr, $num) {
    echo $arr[$num] . '<br>';
    if($num < count($arr)) {
        arrRecurs ($arr, $num += 1);
    }
}

arrRecurs ($data, 0);