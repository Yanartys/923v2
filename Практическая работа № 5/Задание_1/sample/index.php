<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Функции</h1>
    <h2>Встроенные функции, часть 1</h2>

    <?php
    require "teams.php";

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        
        $target_id = $_GET['id'];
        $group_found = false;

        foreach ($content as $item) {
            if ($item['id_team'] == $target_id) {
                $group_found = true;
                
                echo "Группа: " . htmlspecialchars($item['name']) . " (id = " . htmlspecialchars($item['id_team']) . ")<br />\n";
                echo "Страна: " . htmlspecialchars($item['country']) . "<br />\n";
                echo "Дата основания: " . htmlspecialchars($item['date']) . "<br />\n";
                echo "Стиль: " . htmlspecialchars($item['style']) . "<br />\n";
                echo "<hr />\n<p>\n";
                break;
            }
        }

        if (!$group_found) {
            echo "Группа с id = " . htmlspecialchars($target_id) . " не найдена.<br />\n";
        }

    } else {
        foreach ($content as $item) {
            echo "Группа: " . htmlspecialchars($item['name']) . " (id = " . htmlspecialchars($item['id_team']) . ")<br />\n";
            echo "Страна: " . htmlspecialchars($item['country']) . "<br />\n";
            echo "Дата основания: " . htmlspecialchars($item['date']) . "<br />\n";
            echo "Стиль: " . htmlspecialchars($item['style']) . "<br />\n";
            echo "<hr />\n<p>\n";
        }
    }
    ?>

</body>
</html>
