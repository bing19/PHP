<?php

include_once 'autoloader.php';

$calc = new classes_Calc();

if (isset($_POST['x']) && isset($_POST['y']) && isset($_POST['operation'])){
    $calc->setXY($_POST['x'], $_POST['y']);
    $calc->calc($_POST['operation']);

}
include 'template/form.php';

?>

