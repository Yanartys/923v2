<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Основы программирования</h1>
	<h2>Переменные</h2>
	
	<?php
		// определение переменных
		$var1 = 952;
		$var2 = 4;
		$var3 = 3;
		$var4 = 476;
		$var5 = 7;
		$var6 = 196;


		// расчет выражения
		$result = ($var1 / $var2)*$var3 - ($var4 / $var5) + $var6;

		// вывод расчетного значения в браузер
		echo "<p>Результат вычисления выражения (952 / 4) * 3 - (476 / 7) +196 = <b>$result</b></p>";

	?>
	

</body>
</html>