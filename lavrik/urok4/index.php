<?php
<<<<<<< HEAD
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 11.06.17
 * Time: 17:29
 */

//for ($i = 1; $i < 5; $i++) {
//    echo "<a href = 'photo.php?id=$i'>Картинка $i</a>" . '<br>';
//}
function sum ($a, $b, $action) {
    if ($action == 'plus') {
        return $a + $b;
    } elseif ($action == 'minus') {
        return $a - $b;
    }

}
include 'form.php';

if (isset($_POST['firstNum']) && isset($_POST['secondNum'])) {

    switch ($_POST['action']) {
        case 'plus':
            $result = sum ($_POST['firstNum'], $_POST['secondNum'], $_POST['action']);
            break;

        case 'minus':
            $result = sum ($_POST['firstNum'], $_POST['secondNum'], 'minus');
            break;
    }


}

if ($result != 0) {
    echo $result;
} elseif ($result == 0) {
    echo $result;
}
=======

$news = [];
$news[0] = 'За качество ответят. Контролировать продукты питания начали по-новому.';
$news[1] = 'Варшава не раскрывает перечень возможных мер против Минска';
$news[2] = 'Павел Астахов намерен добиваться отставки ряда чиновников Удмуртии';


include 'func.php';

if (isset($_GET['id'])){
    showItemNew($news, $_GET['id']);
} else {
    showListNews($news);
}
>>>>>>> b58dbf05f99623023e5b48bbacf805b9e50b7c25
