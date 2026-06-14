<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №9 — Проверка ключа массива</title>
</head>
<body>

    <h1>Встроенные функции, часть 2</h1>
    <h2>Задание №9: Работа с массивами</h2>
    <hr>

    <?php
    require_once 'person.php';

    if (!array_key_exists('category', $person)) {
        $person['category'] = "Соответствие занимаемой должности";
    }

    echo "<p><strong>Категория преподавателя:</strong> " . htmlspecialchars($person['category']) . "</p>";

    echo "<h3>Структура массива \$person (var_dump):</h3>";
    echo "<pre>";
    var_dump($person);
    echo "</pre>";
    ?>

</body>
</html>

