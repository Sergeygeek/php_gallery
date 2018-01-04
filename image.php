<?php

include_once "db_connect.php";
include_once "engine.php";

$link = db_connect();
$image = getImg($link, $_GET['id']);
updateViews($link, $_GET['id']);
$views = getView($link, $_GET['id']);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IMAGE</title>
</head>
<body>
    <a href="index.php"> Вернуться в галерею </a>
  <div>
   <!--Передаем в качестве гет параметра название фото, так как они у нас одинаковые в обеих папках, то работает большое фото-->
    <img src="<?=$image['big_img_src'] ?>">
    <p>Количество просмотров: <span><?=$views['views'] ?></span></p>
  </div>
</body>
</html>