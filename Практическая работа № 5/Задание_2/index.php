<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        h1 { font-size: 28px; margin-bottom: 5px; }
        h2 { font-size: 22px; margin-top: 0; margin-bottom: 20px; font-weight: bold; }
        .congratulations { font-size: 16px; font-weight: bold; margin-bottom: 20px; }
        .dice-container { display: flex; gap: 15px; }
        .dice-container img { width: 150px; height: auto; border-radius: 10px; }
    </style>
</head>
<body>

    <h1>Встроенные функции, часть1</h1>
    <h2>Поздравляем!</h2>

    <?php
    $path = "cube/";

    $cube1 = rand(1, 6);
    $cube2 = rand(1, 6);
    $cube3 = rand(1, 6);

    $sum = $cube1 + $cube2 + $cube3;
    ?>

    <div class="congratulations">
        Неимоверными усилиями вам удалось набрать <?php echo $sum; ?> баллов!
    </div>

    <div class="dice-container">
        <img src="<?php echo $path . $cube1; ?>.JPG" alt="Кубик <?php echo $cube1; ?>">
        <img src="<?php echo $path . $cube2; ?>.JPG" alt="Кубик <?php echo $cube2; ?>">
        <img src="<?php echo $path . $cube3; ?>.JPG" alt="Кубик <?php echo $cube3; ?>">
    </div>

</body>
</html>
