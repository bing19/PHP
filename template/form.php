<html>
    <head>
        <title>Калькулятор</title>
    </head>
    <body>
        <form action="../index.php" method="post">
            <input type="number" name="x" placeholder="введите число" value="<?php echo $calc->x; ?>"> :
            <input type="number" name="y" placeholder="введите число" value="<?php echo $calc->y; ?>">
            <select name="op">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="submit" name="operation" value="+"><input type="submit" name="operation" value="-">
            <?php echo '<span style="font-size:18px; margin-left:10px;">' . $calc->getResalt() . '</span>'; ?>

        </form>
    </body>
</html>