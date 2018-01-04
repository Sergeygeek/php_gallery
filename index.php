<?php

include_once "config.php";
include_once "engine.php";
include_once "db_connect.php";

$link = db_connect();
$images = getSortedImg($link);

//var_dump($images);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
</head>
<body>
    <h2>Галлерея</h2>
    <div class="container">
        <div class="gallery">
            <?php foreach($images as $image) : ?>
            <!--По ссылке передаем id картинки-->
            <a href="image.php?id=<?=$image['id']?>">
                <img src="<?=$image['src'] ?>" alt="<?=$image['name'] ?>">
            </a>
            <?php endforeach ?>
        </div>
        <form action="server.php" method="post" enctype="multipart/form-data">
        <p>
            <label>Загрузить файл:</label>
            <input type="file" name="userfile">
        </p>
        <button type="submit" name="send">Загрузить</button>
    </form>
    </div>
    
</body>
</html>