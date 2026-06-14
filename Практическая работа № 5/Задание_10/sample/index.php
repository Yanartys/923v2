<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №10 — Восстановление ID</title>
</head>
<body>

    <h1>Встроенные функции, часть 2</h1>
    <h2>Задание №10: Добавление отсутствующих ключей</h2>
    <hr>

    <?php
    require_once 'albums.php';

    echo "<h3>Вариант 1. Через цикл foreach (по ТЗ):</h3>";
    
    $albums_updated_foreach = [];
    $counter = 1;

    foreach ($albums as $item) {
        if (!isset($item['id'])) {
            $item['id'] = (string)$counter;
        }
        
        $counter++;
        $albums_updated_foreach[] = $item;
    }

    echo "<pre>";
    print_r($albums_updated_foreach);
    echo "</pre>";


    echo "<hr><h3>Вариант 2. Более элегантный способ (через array_map):</h3>";

    $map_counter = 1;

    $albums_updated_map = array_map(function($item) use (&$map_counter) {
        if (!isset($item['id'])) {
            $item['id'] = (string)$map_counter;
        }
        $map_counter++;
        return $item;
    }, $albums);

    echo "<pre>";
    print_r($albums_updated_map);
    echo "</pre>";
    ?>

</body>
</html>


