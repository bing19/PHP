<?php

$data = [
    1,
    'abc',
    [
        true,
        'false',
        '10',
        [
            20,
            [5]
        ]
    ],
    10
];



/**
 * calculateArraySum - Функция возвращает сумму всех числовых данных в массиве.
 * @param $arr передаваемый массив.
 * @return int  - сумма всех числовых данных в массиве.
 */
function calculateArraySum (array $arr) {
    $result = 0;
    foreach ($arr as $value) {
        if(is_numeric($value)) {
            $result += $value;
        } elseif (is_array($value)) {
            $result += calculateArraySum($value);
        }
    }
    return $result;
}

echo calculateArraySum ($data);

