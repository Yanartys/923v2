<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Функции</h1>
	<h2>Пользовательские функции</h2>
	
	<?php
    require 'function.php';
    $data = fnGetData();

    $person = $data["personnel"];
    $courses = $data["courses"];
    $educations = $data["educations"];

    function getPersonData($data) {
        $out = "";
        $out .= "id: " . ($data['id_personnel'] ?? '') . "<br />\n";
        $out .= "Фамилия: " . ($data['surname'] ?? '') . "<br />\n";
        $out .= "Имя: " . ($data['name'] ?? '') . "<br />\n";
        $out .= "Отчество: " . ($data['patronymic'] ?? '') . "<br />\n";
        $out .= "Должность: " . ($data['post'] ?? '') . "<br />\n";
        $out .= "Категория: " . ($data['category'] ?? '') . "<br />\n";
        $out .= "Образование: " . ($data['level_text'] ?? ($data['level_edu'] ?? '')) . "<br />\n";
        $out .= "Стаж работы в ОУ: " . ($data['experience_total'] ?? '') . "<br />\n";
        $out .= "<hr />\n<p>\n";
        return $out;
    }

    function getPersonEdu($data) {
        $out = "";
        $out .= "Уровень образования: " . ($data['level_text'] ?? '') . "<br />\n";
        $out .= "Учебное заведение: " . ($data['institution'] ?? '') . "<br />\n";
        $out .= "Специальность: " . ($data['speciality'] ?? '') . "<br />\n";
        $out .= "Квалификация: " . ($data['qualification'] ?? '') . "<br />\n";
        $out .= "Год окончания: " . ($data['year_end'] ?? '') . "<br />\n";
        $out .= "<hr />\n<p>\n";
        return $out;
    }

    function getPersonCours($data) {
        $out = "";
        $out .= "Название курса: " . ($data['title'] ?? '') . "<br />\n";
        $out .= "Количество часов: " . ($data['hours'] ?? '') . "<br />\n";
        $out .= "Год прохождения: " . ($data['year'] ?? '') . "<br />\n";
        $out .= "<hr />\n<p>\n";
        return $out;
    }

    echo getPersonData($person);
    echo getPersonEdu($educations);
    echo getPersonCours($courses);

	

</body>
</html>