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
            .row {
               display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }
            .img {
                max-width: 32%;
                flex-grow:1;
                border: 2px solid #949494;
                margin-bottom: 15px;

            }
            .img img {
                max-width: 100%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Галлерея</h1>
                <div class="row">
                <?php foreach ($images as $num => $img) { ?>

                <div class="img">
                    <a href="/image.php?file=<?php echo $num ?>">
                        <img src="img/<?php echo $img ?>">
                    </a>
                </div>

                <?php } ?>
            </div>




            <form action="postimage.php" method="post" enctype="multipart/form-data">
                <input type="file" name="newimage">
                <input type="submit" value="Загрузить">
            </form>
        </div>

    </body>
</html>

