<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 26.06.17
 * Time: 23:35
 */
include_once 'autoloader.php';
include 'func.php';
if(!empty($_FILES)) {
    getImg ($_FILES);

}

header( "location: / ");