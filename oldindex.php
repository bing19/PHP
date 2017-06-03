<?php

$name = "Евгений";
$age = 29;
$float = 30.1;
$eight = 011;
$six = 0x32;

//	setlocale(LC_TIME, "ru_RU");
//	$currentDate = strftime("%e %B");





echo 'Меня зовут ' . $name . ', мне ' . $age . ' лет.' . '<br>';

print 'Меня зовут ' . $name . ', мне ' . $age . ' лет.' . '<br>';

function formatName($name){

    return 'Сегодня ' . date('d M') . ', привет ' . $name;

}

echo formatName($name) . '<br>';



function add_some_extra($string = "Это почти строка, ")
{
    return $string .= 'и кое-что еще.';
}
$str = 'Это строка, ';
echo add_some_extra($str);
echo $str;    // выведет 'Это строка, и кое-что еще.'


//	Возврат аргументов

function foo() {
    $numargs = func_num_args();
    echo 'Количество аргументов' . $numargs;
    if($numargs >= 2) {
        echo 'Второй аргумент' . func_get_arg(1) .'<br>';
    }
    $argList = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo 'Аргумент ' . ($i + 1) . ' Значение: ' . $argList[$i] .'<br>';
    }
}

foo('Петя', 5, 10);


// Допустим нам нужно сгенерировать случайное число от 100.0 до 120.0
$random = 100.0 + 20.0 * mt_rand() / mt_getrandmax();
echo $random.'<br>';

// Выработка целых чисел (100 - 120);
echo round($random);



echo "<br><br><br>";

$x = 247.21;

echo (string) "<h1>" . $x . "</h1>";


define("STORENAME", 'Semena.cc');

echo (STORENAME) . '<br>' . $age . '<br>' . $float . '<br>' . $eight . '<br>' . $six . '<br>';

echo '”Я помню чудное мгновенье: <br><br>';
echo 'Передо мной явилась ты, <br><br>';
echo 'Как мимолетное виденье, <br><br>';
echo 'Как гений чистой красоты.” <br><br>';
echo '<span style="font-style:italic;">А.С. Пушкин</span><br><br>';

echo '”Я помню чудное мгновенье: <br><br> Передо мной явилась ты, <br><br> Как мимолетное виденье, <br><br> Как гений чистой красоты.” <br><br> <apsn style="font-style:italic;">А.С. Пушкин</span><br><br>';

echo $age + $name;


$a = 1;
$b = 1;
echo (int)(($a > $b) xor ($a < $b));


echo '<br>';
$data = [1,2,3,4];
echo implode('<br>', $data);

?>




