<?php

include_once 'autoloader.php';

$calc = new classes_Calc();

if (isset($_POST['x']) && isset($_POST['y']) && isset($_POST['operation'])){

    $calc->calc($_POST['x'], $_POST['y'], $_POST['operation']);

}


include 'template/form.php';

?>

