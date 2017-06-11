<?php
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
