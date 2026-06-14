<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №4 — Квадратное уравнение через GET</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; color: #333; }
        .container { max-width: 600px; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin: 0 auto; }
        h1 { font-size: 24px; color: #2c3e50; margin-top: 0; }
        .result-box { margin-top: 20px; padding: 15px; border-radius: 4px; background-color: #e9ecef; border-left: 5px solid #007bff; font-size: 16px; line-height: 1.5; }
        .error { background-color: #f8d7da; color: #721c24; border-left-color: #dc3545; }
        .nav-links { margin-bottom: 20px; padding: 10px; background: #e9ecef; border-radius: 4px; font-size: 14px; }
        .nav-links a { color: #007bff; text-decoration: none; margin-right: 15px; font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <h1>Решение квадратного equation</h1>
    
    <div class="nav-links">
        <strong>Тест:</strong> 
        <a href="?a=1&b=-3&c=2">D > 0 (2 корня)</a> | 
        <a href="?a=1&b=2&c=1">D = 0 (1 корень)</a> | 
        <a href="?a=1&b=2&c=5">D < 0 (Нет корней)</a>
    </div>

    <?php
    if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
        
        $a = (float)$_GET['a'];
        $b = (float)$_GET['b'];
        $c = (float)$_GET['c'];

        echo "<div class='result-box'>";
        echo "Уравнение: <strong>{$a}x² + ({$b})x + ({$c}) = 0</strong><br><br>";

        if ($a == 0) {
            echo "Ошибка: коэффициент 'a' не может быть равен 0, иначе уравнение не квадратное.";
        } else {
            $d = pow($b, 2) - 4 * $a * $c;
            echo "Дискриминант (D) = <strong>{$d}</strong><br><br>";

            if ($d > 0) {
                $x1 = (-$b + sqrt($d)) / (2 * $a);
                $x2 = (-$b - sqrt($d)) / (2 * $a);
                echo "Так как <strong>D > 0</strong>, уравнение имеет два корня:<br>";
                echo "x1 = <strong>" . round($x1, 4) . "</strong><br>";
                echo "x2 = <strong>" . round($x2, 4) . "</strong>";
            } elseif ($d < 0) {
                echo "Так как <strong>D < 0</strong>, действительных <strong>корней нет</strong>.";
            } else {
                $x = -$b / (2 * $a);
                echo "Так как <strong>D = 0</strong>, уравнение имеет один корень:<br>";
                echo "x = <strong>" . round($x, 4) . "</strong>";
            }
        }
        echo "</div>";

    } else {
        echo "<div class='result-box error'>";
        echo "Коэффициенты уравнения (a, b, c) не переданы. Нажмите на ссылки тестирования выше.";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
