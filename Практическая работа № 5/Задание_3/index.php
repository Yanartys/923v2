<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №3 — Динамические кубики</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; color: #333; }
        .container { max-width: 800px; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin: 0 auto; }
        h1 { font-size: 26px; margin-bottom: 5px; }
        h2 { color: #7f8c8d; font-size: 18px; margin-top: 0; font-weight: normal; margin-bottom: 20px; }
        .congratulations { font-size: 16px; font-weight: bold; margin-bottom: 20px; }
        .dice-container { display: flex; gap: 15px; flex-wrap: wrap; margin-top: 15px; }
        .dice-container img { width: 120px; height: auto; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

<div class="container">
    <h1>Встроенные функции, часть 1</h1>
    <h2>Поздравляем!</h2>

    <?php
    $count = 4; 
    
    $path = "cube/"; 
    
    $dice_values = array();
    $sum = 0;


    for ($i = 0; $i < $count; $i++) {
        $random_score = rand(1, 6);
        $dice_values[] = $random_score;
        $sum += $random_score;
    }
    ?>

    <div class="congratulations">
        Неимоверными усилиями вам удалось набрать <?php echo $sum; ?> баллов!
    </div>

    <div class="dice-container">
        <?php foreach ($dice_values as $score): ?>
            <img src="<?php echo $path . $score; ?>.JPG" alt="Кубик <?php echo $score; ?>">
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>

