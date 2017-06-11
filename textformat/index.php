<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 09.06.17
 * Time: 11:54
 */

$text = "слово слово <b>слово слово</b> слово слово";
$n = 15;            // максимальная длина каждой части текста, но не менее 1 слова

// разбиваем текст на "слова" по пробельным символам
preg_match_all("/[^\s]+/i", $text, $matches);
$text_arr = $matches[0];

// объединяем те "слова", которые содержатся внутри тегов
$text_arr2 = array();
$text_tmp = array();
$tag_open = $tag_close = 0;
foreach ($text_arr as $word) {
    $tag_open += preg_match_all("/<[^\/]+>/Ui", $word, $matches);
    $tag_close += preg_match_all("/<\/.+>/Ui", $word, $matches);
    $text_tmp[] = $word;
    if ($tag_open==$tag_close) {
        $text_arr2[] = implode(" ", $text_tmp);
        $text_tmp = array();
    }
}

// вычисляем кол-во слов для каждой части текста
$result_len = strlen($text_arr2[0]);
$result_num_words[0] = 1;
$part = 0;
foreach (array_slice($text_arr2, 1) as $word) {
    $word_len = strlen($word);
    if ($result_len + $word_len + $result_num_words[$part] > $n) {
        $part++;
        $result_len = $word_len;
        $result_num_words[$part] = 1;
        continue;
    }
    $result_len += $word_len;
    $result_num_words[$part]++;
}

// разбиваем текст на части
$result = array();
$offset = 0;
foreach ($result_num_words as $rnw) {
    $result[] = implode(" ", array_slice($text_arr2, $offset, $rnw));
    $offset += $rnw;
}

var_dump($result);