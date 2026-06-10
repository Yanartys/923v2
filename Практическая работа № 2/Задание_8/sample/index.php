<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Основы программирования</h1>
	<h2>Константы</h2>
	
	<?php
		// набор переменных сценария
	const ALBUM = [
		'album' => "The Dark Side of The Moon",
		'artist' => "Pink Floyd",
		'date' => "17 марта 1973",
		'label' => "Harvest, Capitol, EMI",
		'foramt' => "LP, кассета, CD, SACD",
		'status' => "Платиновый (USA), Платиновый(GBR)"
	];

	echo "<pre>";
	echo "Альбом:" . ALBUM['album'] . "\n";
	echo "Группа:" . ALBUM['artist'] . "\n";
	echo "Дата выпуска:" . ALBUM['date'] . "\n";
	echo "Лейбл:" . ALBUM['label'] . "\n";
	echo "Форматы:" . ALBUM['format'] . "\n";
	echo "Статус:" . ALBUM['status'];
	echo "</pre>";
	?>
		

</body>
</html>