<?php
	// функция получения данных
	// в реальном приложении данные будут получаться из баз данных
	// сейчас это не принципиально 
	function fnGetData () {
		// подключаем файлы, получаем данные
		require 'dump/personnel.php';
		require 'dump/courses.php';
		require 'dump/educations.php';
		// теперь внутри функции доступны МАССИВЫ
		// - $personnel
		// - $courses
		// - $educations 
		
		// данные получили, можно их упаковать в ассоциативный массив и
		// отдать во внешнее приложение
		return $data = array(
			'personnel' => $personnel,
			'courses' => $courses,
			'educations' => $educations
		);
	}
function getPersonData($arr) {
    $item = $arr[0]; 
    
    echo "id: " . htmlspecialchars($item['id_personnel']) . "<br />\n";
    echo "Фамилия: " . htmlspecialchars($item['surname']) . "<br />\n";
    echo "Имя: " . htmlspecialchars($item['name']) . "<br />\n";
    echo "Отчество: " . htmlspecialchars($item['patronymic']) . "<br />\n";
    echo "Должность: " . htmlspecialchars($item['post']) . "<br />\n";
    echo "Категория: " . htmlspecialchars($item['category']) . "<br />\n";
    echo "Образование: " . htmlspecialchars($item['level_text'] ?? $item['level_edu']) . "<br />\n";
    echo "Стаж работы в ОУ: " . htmlspecialchars($item['experience_total']) . "<br />\n";
    echo "<hr />\n<p>\n";
}

function getPersonEdu($arr) {
    $item = $arr[0];
    
    echo "Уровень образования: " . htmlspecialchars($item['level_text'] ?? '') . "<br />\n";
    echo "Учебное заведение: " . htmlspecialchars($item['institution'] ?? '') . "<br />\n";
    echo "Специальность: " . htmlspecialchars($item['speciality'] ?? '') . "<br />\n";
    echo "Квалификация: " . htmlspecialchars($item['qualification'] ?? '') . "<br />\n";
    echo "Год окончания: " . htmlspecialchars($item['year_end'] ?? '') . "<br />\n";
    echo "<hr />\n<p>\n";
}

function getPersonCours($arr) {
    $item = $arr[0];
    
    echo "Название курса: " . htmlspecialchars($item['title'] ?? '') . "<br />\n";
    echo "Количество часов: " . htmlspecialchars($item['hours'] ?? '') . "<br />\n";
    echo "Год прохождения: " . htmlspecialchars($item['year'] ?? '') . "<br />\n";
    echo "<hr />\n<p>\n";
}
