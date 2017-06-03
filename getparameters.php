<form action = "<?php $_PHP_SELF ?>" method = "POST">
    Имя: <input type = "text" name = "name" />
    Возраст: <input type = "text" name = "age" />
    <input type = "submit" />
</form>



<?php

var_dump($_SERVER['PHP_SELF']);


if( $_REQUEST["name"] || $_REQUEST["age"] ) {
    echo "Привет ". $_REQUEST['name']. "<br />";
    echo "Твой возраст ". $_REQUEST['age'];
    exit();
}




function getStringsFromGet() {
    $arr = $_GET;
    $result = [];
    //    $arr = array_values($_GET);
//    for($i = 0, $size = count($arr); $i < $size; $i++) {
//        if(is_string($arr[$i]) && !(is_numeric($arr[$i]))) {
//            $result[] = $arr[$i];
//        }
//     }

//    Перебор ассоциативного массива
//    reset - сброс ключа,
//    next - перемещение на следующий ключ.
//    key - возвращает ключ текущего элемента массива
//
//        for(reset($_GET); ($key = key($_GET)); next($_GET)) {
//            if(is_string($_GET[$key]) && !(is_numeric($_GET[$key]))) {
//                $result[] = $_GET[$key];
//            }
//        }

    foreach ($arr as $value) {
        if(is_string($value) && (!(is_numeric($value)))) {
            $result[] = $value;
        }
    }
    return $result;
}

var_dump (getStringsFromGet());
echo implode ('|', getStringsFromGet());


?>