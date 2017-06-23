<html>
    <head>
        <title>Калькулятор</title>
    </head>
    <body>
        <form action="../index.php" method="post">
            <input type="number" name="x" placeholder="введите число" value="<?php echo $calc->x; ?>"> :
            <input type="number" name="y" placeholder="введите число" value="<?php echo $calc->y; ?>">
            <select name="operation">
                <?php foreach ($calc->validOperation as $op) { ?>
                    <option value="<?php echo $op ?>" <?php if ($calc->operation == $op) { ?>selected<?php } ?>><?php echo $op ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="=">
            <?php echo '<span style="font-size:18px; margin-left:10px;">' . $calc->getResalt() . '</span>'; ?>

        </form>
    </body>
</html>