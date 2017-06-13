<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 11.06.17
 * Time: 22:54
 */

function showListNews ($news) {
    echo '<ul>';
    for ($i = 0; $i < count($news); $i++) {
        echo '<li><a href="index.php?id=' . ($i+1) . '">' . $news[$i] . '</a></li>';
    }
    echo '</ul>';
}

function showItemNew ($news, $id) {
    echo '<a href="index.php" >Вернутся к списку</a>' . '<br>';
    echo $news[$id-1];
}