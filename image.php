<?php
include_once 'autoloader.php';

$num = $_GET['file'];
$images = include APP_ROOT . DS . 'data.php';

?>

<html>
<head>
    <title>Галлерея</title>
    <style>
        * {
            box-sizing: border-box;
        }
        .container {
            width: 1200px;
            margin: 0 auto;
        }

        img {
            max-width: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <img src="img/<?php echo $images[$num] ?>">

</div>

</body>
</html>
