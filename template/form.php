<html>
    <head>
        <title>Калькулятор</title>
    </head>
    <body>
        <form action="../index.php" method="post">
            <input type="number" name="x" placeholder="введите число" value="<?php echo $calc->x; ?>"> +
            <input type="number" name="y" placeholder="введите число" value="<?php echo $calc->y; ?>">
            <input type="submit" value="="> <?php echo $calc->getResalt(); ?>

        </form>
    </body>
</html>