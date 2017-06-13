<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 05.06.17
 * Time: 22:22
 */

$data = [1, 3, 5, 10, 2];
$arr = [10, 3, 6];
$users = [
    ['user' => 'John', 'age' => 12, 'live' => 'London'],
    ['user' => 'Jim', 'age' => 30, 'live' => 'London'],
    ['user' => 'Frenk', 'age' => 55, 'live' => 'London'],
    ['user' => 'Frenk', 'age' => 20, 'live' => 'London']
];

var_dump([1, 3] + [10, 3, 6]);
//$newData = [];
//foreach ($data as $key => $value) {
//    $newData[$data[0]] = [$data[1], $data[2], $data[3]];
//
//}

//echo sizeof($data);
//echo '<br>';
//echo count($data);
//echo '<br>';
//
//echo in_array('Banan', $data);


echo '<br>';


function myMax (array $arr) {
    if (empty($arr)) {
        return;
    }
    $max = $arr[0];
    for ($i = 0; $i < sizeof($arr); $i++) {
        if($max < $arr[$i]) {
            $max = $arr[$i];
        }
    }

    return $max;
}

function maxAge ($arr) {
    if(empty($arr)) {
        return;
    }
    var_dump($arr);
    $oldest = $arr[0]['age'];
    foreach ($arr as $user){
        if ($user['age'] > $oldest){
            $oldest = $user['age'];
        }
    }
    return $oldest;
}
echo maxAge ($users);

echo myMax ($data);