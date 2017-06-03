<?php
$data = [
    16,
    7,
    4
];

//Вариант с проверкой входных данных
function processArray ($array) {
    $result = '';

    if (is_array($array)) {

        foreach ($array as $value) {
            if ($value % 2 == 0) {

                $result[] = $value * 2;
            }
        }
        return implode ('', $result);

    } else {
        return 'Передайте функции массив';
    }

}

//Вариант с типом данных передаваемого аргумента

//function processArray (array $array) {
//    $result = '';
//    foreach ($array as $value) {
//        if ($value % 2 == 0) {
//            $result = $result . ($value * 2);
//        }
//    }
//    return $result;
//
//}



echo processArray($data);