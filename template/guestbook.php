<html>
    <head>
        <title>GuestBook</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

        <div class="container">
            <h1>Гостевая книга</h1>
            <?php foreach ($guestbook->getData() as $item) { ?>
            <div class="item">
                <div class="item-top">
                    <div class="name"><?php echo $item['name'] ?></div>
                    <div class="date"><?php echo $item['date'] ?></div>
                </div>
                <p><?php echo $item['message'] ?></p>
                <a class="delete" href="?action=delete&id=<?php echo $item['id']; ?>">Удалить</a>
            </div>
            <?php } ?>

            <form action="sendpost.php" method="post">
                <label>
                    Ваше имя
                    <input type="text" name="name" placeholder="Введите ваше имя">
                </label>
                <label>Ваше сообщение
                    <textarea name="massege" cols="40" rows="3" placeholder="Тест сообщения...."></textarea>
                </label>

                <button type="submit">Отправить сообщение</button>
            </form>
            
        </div>
    </body>
</html>