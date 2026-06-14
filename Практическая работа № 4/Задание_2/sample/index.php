<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание № 2 — Оценка памяти</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; color: #333; }
        .container { max-width: 500px; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin: 0 auto; }
        h2 { color: #2c3e50; border-bottom: 2px solid #007bff; padding-bottom: 10px; margin-top: 0; }
        .form-group { margin: 20px 0; }
        label { display: block; margin-bottom: 8px; font-weight: bold; }
        input[type="number"] { width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc; font-size: 16px; box-sizing: border-box; }
        button { background-color: #007bff; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; font-weight: bold; }
        button:hover { background-color: #0056b3; }
        .result-box { margin-top: 25px; padding: 15px; border-radius: 4px; border-left: 5px solid #28a745; background-color: #d4edda; color: #155724; font-size: 18px; }
        .poem-hint { margin-top: 25px; background-color: #fcf8e3; border: 1px solid #faebcc; padding: 15px; border-radius: 4px; font-size: 14px; }
        .poem-text { font-family: monospace; white-space: pre-line; margin-top: 10px; color: #555; line-height: 1.4; }
    </style>
</head>
<body>

<div class="container">
    <h2>Задание № 2: Тест уровня памяти</h2>
    
    <form method="POST" action="">
        <div class="form-group">
            <label for="lines_count">Входные данные — количество вспомненных строк (от 0 до 14):</label>
            <input type="number" name="lines_count" id="lines_count" min="0" max="14" value="<?= isset($_POST['lines_count']) ? (int)$_POST['lines_count'] : 0 ?>" required>
        </div>
        <button type="submit">Определить уровень</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lines_count'])) {
        $lines = (int)$_POST['lines_count'];
        $text = "";

        if ($lines <= 2) {
            $text = "Беда.";
        } elseif ($lines <= 4) {
            $text = "Плохо.";
        } elseif ($lines <= 6) {
            $text = "Кажется, что вы где-то учились";
        } else {
            $text = "Превосходно.";
        }

        echo "<div class='result-box'>";
        echo "Вспомнили строк: <strong>{$lines}</strong><br>";
        echo "Выходные данные (текст): <strong>{$text}</strong>";
        echo "</div>";
    }
    ?>

    <div class="poem-hint">
        <strong>Раздаточный материал (всего 14 строк):</strong>
        <div class="poem-text">1. «Мой дядя самых честных правил,
2. Когда не в шутку занемог,
3. Он уважать себя заставил
4. И лучше выдумать не мог.
5. Его пример другим наука;
6. Но, боже мой, какая скука
7. С больным сидеть и день и ночь,
8. Не отходя ни шагу прочь!
9. Какое низкое коварство
10. Полуживого забавлять,
11. Ему подушки поправлять,
12. Печально подносить лекарство,
13. Вздыхать и думать про себя:
14. Когда же черт возьмет тебя!»</div>
    </div>
</div>

</body>
</html>
