<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №2 — Ассоциативный массив</title>
</head>
<body>

    <h1>Информация по преподавателю (Ассоциативный массив)</h1>

    <?php
    $teacher_info = [
        "surname"          => "Иванов",
        "name"             => "Иван",
        "patronymic"       => "Иванович",
        "birth_date"       => "15.05.1985",
        "position"         => "Учитель математики",
        "category"         => "Высшая",
        "education_level"  => "Высшее (магистратура)",
        "university"       => "МГУ им. М.В. Ломоносова",
        "qualification"    => "Математик, преподаватель",
        "specialization"   => "Математика и информатика",
        "experience_here"  => "5 лет",
        "total_experience" => "12 лет",
        "email"            => "ivanov_i@example.com"
    ];

    echo "<pre>";
    print_r($teacher_info);
    echo "</pre>";
    ?>

</body>
</html>

