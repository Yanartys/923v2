<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>

    <h1>Пользовательские функции</h1>
    <h2>Задание №3: Таблица треков</h2>
    <hr>

    <?php

    include "track.php";

    include "function.php";

    $id = 10;

    fnOutTrack($track, $id);
    ?>

</body>
</html>
