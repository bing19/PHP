<html>
<head></head>
<body>
<h1>Работа с Файлами</h1>
<div>
    <a href="?action=read">Прочитать файл</a>
    <a href="index.php">Записать телефон</a>
    <a href="?action=del">Удалить файл</a>
</div>

</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 31.05.17
 * Time: 21:41
 */


/**
 * обьявляем константы для приложения
 */

define('APP_ROOT', __DIR__); // Корневая директория проекта
define('DS', DIRECTORY_SEPARATOR); //Сепаратор
define('GET_ACTION', 'action'); //Константа содержит строку action по которой потом будем проверять
define('ACTION_READ', 'read');
define('ACTION_WRITE', 'write');
define('ACTION_DELETE', 'del');
define('ACTION_DEFAULT', null); //Для дефолта присвоили константу чтения, таким образом сможем потом поменять действие


include APP_ROOT . DS . 'func.php'; //Подключаем файл с функциями

//основной код приложения

/**
 * объявляем путь к рабочему файлу
 * app/data/phone.csv
 */

$file = APP_ROOT . DS . 'file' . DS . 'phone.csv';
$data = genArray(100, 100, 'hex'); //Записываем в переменную функцию которая нам сгенерирует массив

//выбираем что надо сделать
/**
 * http://it-nk.com/?action=write -> записываем данные
 * http://it-nk.com/?action=read -> читаем данные
 *
 * если ничего в $_GET не указанно , дефолтное поведение
 */

//Выполняет проверку на то что находиться в адресной строке, и записываем значение в переменную $action
if (isset($_GET[GET_ACTION]) && (($_GET[GET_ACTION] !== 'write') && ($_GET[GET_ACTION] !== 'read') && ($_GET[GET_ACTION] !== 'del'))) {
    $action = ACTION_DEFAULT;


} elseif (isset($_GET[GET_ACTION]) && (($_GET[GET_ACTION] == 'write') || ($_GET[GET_ACTION] == 'read'))) {
    $action = $_GET[GET_ACTION];

} elseif (isset($_GET[GET_ACTION]) && (($_GET[GET_ACTION] == 'del'))) {
    $action = $_GET[GET_ACTION];

} else {

    $action = ACTION_DEFAULT;
}


$output = ''; //Инициализируем переменную в которую будет записываться данные для вывода

//Проверяем что имеено находиться в $action, при нужных совпадениях вызываем функции.
switch ($action) { // В action например пришло read
    case ACTION_READ: // В данной константе тоже лежит read
        echo '<br>' . readContent($file, "<br>", 20);
        break;
    case ACTION_WRITE:
        writeContent($file, $_GET['telephone']);
        $output = 'Записано';
        break;
    case ACTION_DELETE:
        delFileContent($file);
        break;
    default:
        include APP_ROOT . DS . 'form.php';
}

echo $output;