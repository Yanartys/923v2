<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Управляющие конструкции</h1>
    <h2>Конструкции</h2>

    <?php
    require_once 'personnels.php';

    $term = "surname";
    $value = "Маркова";

    foreach ($content as $item) {
        if ($item[$term] == $value) {
            echo "id: " . htmlspecialchars($item['id_personnel']) . "<br />\n";
            echo "Фамилия: " . htmlspecialchars($item['surname']) . "<br />\n";
            echo "Имя: " . htmlspecialchars($item['name']) . "<br />\n";
            echo "Отчество: " . htmlspecialchars($item['patronymic']) . "<br />\n";
            echo "Должность: " . htmlspecialchars($item['post']) . "<br />\n";
            echo "Категория: " . htmlspecialchars($item['category']) . "<br />\n";
            echo "Образование: " . htmlspecialchars($item['level_edu']) . "<br />\n";
            echo "Стаж работы в ОУ: " . htmlspecialchars($item['experience_total']) . "<br />\n";
        }
    }
    ?>

</body>
</html>
