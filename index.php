<?php

include_once 'autoloader.php';

$calc = new classes_Calc();

if (isset($_POST['x']) && isset($_POST['y'])){
    $calc->setXY($_POST['x'], $_POST['y']);
    $calc->calc();

}
include 'template/form.php';

?>

