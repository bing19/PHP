<?php
define('APP_ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

/**
 * обьявляем константы для приложения
 */
define('PARAM_ACTION', 'action');
define('ACTION_READ', 'read');
define('ACTION_WRITE', 'write');
define('ACTION_DEFAULT', ACTION_READ);


#определяем наши функции приложения, имеет смысл вынести в отдельный файл
#понадобится 3 функции
# 1. сгенерировать данные
# 2. записать в файл
# 3. прочитать файл

/**
 * Сгенерировать данные и возвратить в массиве
 *
 * @param string $dataType - тип данных string,numbers,numbers+string
 * @param int $size - размер
 * @param int $length
 * @return array
 */
function generateContent($dataType = null, $size = 10, $length = 10) {
    switch ($dataType) {
        case 'string' :
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            break;
        case 'numbers' :
            $characters = '1234567890';
            break;
        default :
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            break;

    };

    $charactersLength = strlen($characters) - 1;
    $result = [];
    for ($i = 0; $i < $size; $i++) {
        $line = '';
        foreach (range(0, $length) as $k) {
            $line.= $characters[rand(0, $charactersLength)];
        }
        $result[] = $line;
    }

    return $result;
}

/**
 * Записать данные в файл
 *
 * @param $fileName - путь к файлу
 * @param array $content - данные
 */
function writeFileContent($fileName, array $content = []) {
    $handler = fopen($fileName, 'w+');
    fwrite($handler, implode("\n", $content));
    fclose($handler);
}

/**
 * Прочитать данные из файла
 *
 * @param $fileName - путь к файлу
 * @param string $newLineSeparator - разделитель новой строки для вывода
 * @param int $maxLines - сколько строк надо прочитать
 * @return string
 */
function readFileContent($fileName, $newLineSeparator = "\n", $maxLines = 100) {
    $handler = fopen($fileName, 'r');
    $lineCounter = 1;
    $result = '';
    while (($buffer = fgets($handler)) !== false || $lineCounter > $maxLines ) {
        $result.= $buffer . $newLineSeparator;
        $lineCounter+=1;
    }

    fclose($handler);

    return $result;
}

//основной код приложения

/**
 * обьявляем путь к рабочему файлу
 * app/data/phone.csv
 */
$fileName = APP_ROOT . DS . 'app' . DS . 'data' . DS . 'phone.csv';

//выибираем что надо сделать
/**
 * http://it-nk.com/?action=write -> записываем данные
 * http://it-nk.com/?action=read -> читаем данные
 *
 * если ничего в $_GET не указанно , дефолтное поведение
 */
if (isset($_GET[PARAM_ACTION])) {
    $action = $_GET[PARAM_ACTION];
} else {
    $action = ACTION_DEFAULT;
}

$output = '';

switch ($action) {
    case ACTION_READ :
        $output = readFileContent($fileName, '</br>');
        break;
    case ACTION_WRITE :
        writeFileContent($fileName,generateContent('numbers'));
        $output =  'данные записанны';
        break;
}

echo $output;