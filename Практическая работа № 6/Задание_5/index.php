<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №5 — Поиск преподавателей</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; color: #333; }
        .container { max-width: 750px; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin: 0 auto; }
        h1 { color: #2c3e50; font-size: 24px; margin-top: 0; }
        .nav-links { margin-bottom: 25px; padding: 12px; background: #e9ecef; border-radius: 6px; font-size: 14px; }
        .nav-links a { color: #007bff; text-decoration: none; margin-right: 12px; font-weight: bold; }
        .nav-links a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="container">
    <h1>Пользовательские функции</h1>
    <hr>
    
    <div class="nav-links">
        <strong>Выбрать преподавателя:</strong> 
        <a href="index.php">По умолчанию (ID: 1)</a> | 
        <a href="index.php?id=2">ID: 2</a> | 
        <a href="index.php?id=4">ID: 4</a> | 
        <a href="index.php?id=5">ID: 5</a>
    </div>

    <?php
    require 'function.php';
    
    $data = fnGetData();

    $personnels = $data["personnel"];
    $courses = $data["courses"];
    $educations = $data["educations"];

    $target_id = (isset($_GET['id']) && !empty($_GET['id'])) ? (int)$_GET['id'] : 1;

    function getPersonData($arr, $id) {
        $out = "";
        foreach ($arr as $item) {
            if ($item['id_personnel'] == $id) {
                $out .= "<h3>Персональные данные:</h3>";
                $out .= "id: " . ($item['id_personnel'] ?? '') . "<br />\n";
                $out .= "Фамилия: " . ($item['surname'] ?? '') . "<br />\n";
                $out .= "Имя: " . ($item['name'] ?? '') . "<br />\n";
                $out .= "Отчество: " . ($item['patronymic'] ?? '') . "<br />\n";
                $out .= "Должность: " . ($item['post'] ?? '') . "<br />\n";
                $out .= "Категория: " . ($item['category'] ?? '') . "<br />\n";
                $out .= "Стаж работы в ОУ: " . ($item['experience_total'] ?? '') . "<br />\n";
                $out .= "<hr />\n";
                return $out;
            }
        }
        return "<p style='color:red;'>Персональные данные для преподавателя с id={$id} не найдены.</p><hr />";
    }

    function getPersonEdu($arr, $id) {
        $out = "";
        foreach ($arr as $item) {
            if ($item['id_personnel'] == $id) {
                $out .= "<h3>Сведения об образовании:</h3>";
                $out .= "Уровень образования: " . ($item['level_text'] ?? ($item['level_edu'] ?? '')) . "<br />\n";
                $out .= "Учебное заведение: " . ($item['institution'] ?? '') . "<br />\n";
                $out .= "Специальность: " . ($item['speciality'] ?? '') . "<br />\n";
                $out .= "Квалификация: " . ($item['qualification'] ?? '') . "<br />\n";
                $out .= "Год окончания: " . ($item['year_end'] ?? '') . "<br />\n";
                $out .= "<hr />\n";
                return $out;
            }
        }
        return "<p style='color:orange;'>Сведения об образовании для id={$id} не найдены.</p><hr />";
    }

    function getPersonCours($arr, $id) {
        $out = "";
        $found = false;
        foreach ($arr as $item) {
            if ($item['id_personnel'] == $id) {
                if (!$found) {
                    $out .= "<h3>Курсы повышения квалификации:</h3>";
                    $found = true;
                }
                $out .= "• Название курса: " . ($item['title'] ?? '') . " | ";
                $out .= "Часов: " . ($item['hours'] ?? '') . " | ";
                $out .= "Год: " . ($item['year'] ?? '') . "<br />\n";
            }
        }
        if ($found) {
            $out .= "<hr />\n";
            return $out;
        }
        return "<p style='color:orange;'>Курсы повышения квалификации для id={$id} не найдены.</p><hr />";
    }

    echo "<h2>Анкета преподавателя (Выбранный ID: {$target_id})</h2>";
    echo getPersonData($personnels, $target_id);
    echo getPersonEdu($educations, $target_id);
    echo getPersonCours($courses, $target_id);
    ?>
</div>

</body>
</html>
