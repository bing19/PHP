<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 08.06.17
 * Time: 20:11
 */
//header("Content-Type: text/html; charset=UTF-8");
//$x = 0;

//while ($x <= 100) {
//    if ($x % 3 == 0) {
//        echo $x;
//    }
//    $x++;
//}






//$x = 0;
//do {
//    if($x == 0) {
//        echo $x . ' - это ноль <br>';
//    } elseif ($x % 2 != 0) {
//        echo $x . ' - нечетное число <br>';
//    } else {
//        echo $x . ' - четное число <br>';
//    }
//    $x++;
//} while ($x <= 10);
//






//for($i = 0;  $i<10; print $i, $i++);



$city = [
    'Kersonskaja' => ['Кхерсон', 'Каховка'],
    'Odeskaja' => ['Одесса', 'Илличевск'],
    'Рязанская область' => ['Рязань', 'Павловск', 'Красноярск']
];

function cityByName ($city, $chars = '') {
    foreach ($city as $obl => $town) {
        echo '<h1>' . $obl . '</h1>';
        echo '<ul>';


        foreach ($town as $key => $item) {
            $goroda = '';

            if(substr($item, 0, 2) == $chars) {

                if ($key == count($town) - 1) {
                    $goroda .= $item;
                } else {

                    $goroda .= $item . ',';
                }

            } elseif (empty($chars)) {
                if($key == count($town) - 1) {
                    $goroda .= $item;
                } else {

                    $goroda .= $item . ',';
                }
            }

            echo '<li>'. $goroda .'</li>';
        }
        echo '</ul>';
    }

}

cityByName ($city);

//    echo $obl . ':' . '<br>' . '&nbsp;&nbsp;' . implode(', ', $town) . '<br>';


//
//function translit ($str) {
//    $chars = [
//        'а' => 'a',
//        'б' => 'b',
//        'в' => 'v',
//        'г' => 'g',
//        'д' => 'd',
//        ' ' => '_'
//    ];
//    $newstr = '';
//        for ($i = 0; $i < strlen($str); $i++) {
//
//            foreach ($chars as $key => $value) {
//                if ($str[$i] == $key) {
//                    $newstr .= $value;
////                    if($str[$i] == ' '){
////                        $newstr .= '_';
////                    }
//                }
//            }
//        }
//    return $newstr;
//}
//
//
//
//echo translit('дбв габв');

//function translit ($str) {
//    $output = '';
//    $chars = [
//        'а' => 'a',
//        'б' => 'b',
//        'в' => 'v',
//        'г' => 'g',
//        'д' => 'd',
//        ' ' => '_'
//    ];
//    for ($i = 0; $i < strlen($str); $i++) {
//            $output .= $chars[$str[$i]];
//
//
//        }
//    return $output;
//}
//
//function changeSpace ($str) {
//    $space = explode(' ', $str);
//    $slesh = implode('_', $space);
//    return $slesh;
//}

function trans ($str) {

    function translit($str) {
        $output = '';
        $chars = [
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            ' ' => '_'
        ];
        for ($i = 0; $i < strlen($str); $i++) {
            $output .= $chars[$str[$i]];


        }
        return $output;

    }

    function changeSpace($str) {
        $space = explode(' ', $str);
        $slesh = implode('_', $space);
        return $slesh;
    }

    return changeSpace(translit($str));

}


echo trans('ббб');