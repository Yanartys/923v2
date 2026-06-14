<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>

    <h1>Пользовательские функции</h1>
    <h2>Задание №1: Вывод массива через функцию</h2>
    <hr>

    <?php
    require_once 'team.php';

    function print_team($arr) {
        foreach ($arr as $item) {
            echo "
                Группа: {$item['name']} (id = {$item['id_team']})<br />
                Страна: {$item['country']}<br />
                Дата основания: {$item['date']}<br />
                Стиль: {$item['style']}<br />
                <hr />
                <p>
            ";
        }
    }

    print_team($team);
    ?>

</body>
</html>
