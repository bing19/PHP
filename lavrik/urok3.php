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



//$city = [
//    'Kersonskaja' => ['Кхерсон', 'Каховка'],
//    'Odeskaja' => ['Odessa', 'Illichevsk'],
//    'Рязанская область' => ['Рязань', 'Павловск', 'Красноярск']
//];
//
//foreach ($city as $obl => $town) {
//    echo '<h1>' . $obl . '</h1>';
//    echo '<ul>';
//
//
//    foreach ($town as $item) {
//        $goroda = '';
//        if(substr($item, 0, 2) == 'К'){
//            $goroda .= $item;
//        }
//
//        echo '<li>'. $goroda .'</li>';
//    }
//    echo '</ul>';
//}

//    echo $obl . ':' . '<br>' . '&nbsp;&nbsp;' . implode(', ', $town) . '<br>';



function translit ($str) {
    $chars = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        ' ' => '_'
    ];
    $newstr = '';
        for ($i = 0; $i < strlen($str); $i++) {

            foreach ($chars as $key => $value) {
                if ($str[$i] == $key) {
                    $newstr .= $value;
//                    if($str[$i] == ' '){
//                        $newstr .= '_';
//                    }
                }
            }
        }
    return $newstr;
}

echo translit('дбв габв');