<html>
    <head>
        <title>GuestBook</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

        <div class="container">
            <h1>Гостевая книга</h1>
            <?php $post = $guestbook->getAllPost();
                foreach ($post as $obj) { ?>
            <div class="item">
                <div class="item-top">
                    <div class="name"><?php echo $obj->getName(); ?></div>
                    <div class="date"><?php echo $obj->getPostDate(); ?></div>
                </div>
                <p><?php echo $obj->getMessage() ?></p>
                <div class="delete">
                    <a href="?action=delete&id=<?php echo $obj->getPostId(); ?>">Удалить</a>
                </div>

            </div>
            <?php } ?>

            <form action="sendpost.php" method="post">
                <label>
                    Ваше имя
                    <input type="text" name="name" placeholder="Введите ваше имя">
                </label>
                <label>Ваше сообщение
                    <textarea name="message" cols="40" rows="3" placeholder="Тест сообщения...."></textarea>
                </label>

                <button type="submit">Отправить сообщение</button>
            </form>

        </div>

        <script>
            var elem = document.getElementsByClassName("delete");
            console.log(elem);

            for ( var i = 0; i < elem.length; i++) {
                elem[i].onclick = function() {
                    confirm("Подтвердите удаление");
                }
            }



            if (window.location.search) {

                location.href = "http://php.loc";
            }





        </script>
    </body>
</html>