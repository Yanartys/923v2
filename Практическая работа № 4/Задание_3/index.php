<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание № 3 — Квадратное уравнение</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; color: #333; }
        .container { max-width: 450px; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin: 0 auto; }
        h2 { color: #2c3e50; border-bottom: 2px solid #007bff; padding-bottom: 10px; margin-top: 0; }
        .form-group { margin: 15px 0; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="number"] { width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc; font-size: 16px; box-sizing: border-box; }
        button { background-color: #007bff; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; font-weight: bold; }
        button:hover { background-color: #0056b3; }
        .result-box { margin-top: 25px; padding: 15px; border-radius: 4px; border-left: 5px solid #007bff; background-color: #e9ecef; font-size: 16px; line-height: 1.5; }
        .error { border-left-color: #dc3545; background-color: #f8d7da; color: #721c24; }
    </style>
</head>
<body>

<div class="container">
    <h2>Решение квадратного уравнения</h2>
    <p>Общий вид: <strong>a &bull; x² + b &bull; x + c = 0</strong></p>
    
    <form method="POST" action="">
        <div class="form-group">
            <label for="a">Коэффициент a:</label>
            <input type="number" step="any" name="a" id="a" value="<?= isset($_POST['a']) ? htmlspecialchars($_POST['a']) : 1 ?>" required>
        </div>
        <div class="form-group">
            <label for="b">Коэффициент b:</label>
            <input type="number" step="any" name="b" id="b" value="<?= isset($_POST['b']) ? htmlspecialchars($_POST['b']) : 0 ?>" required>
        </div>
        <div class="form-group">
            <label for="c">Коэффициент c:</label>
            <input type="number" step="any" name="c" id="c" value="<?= isset($_POST['c']) ? htmlspecialchars($_POST['c']) : 0 ?>" required>
        </div>
        <button type="submit">Рассчитать корни</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $a = (float)$_POST['a'];
        $b = (float)$_POST['b'];
        $c = (float)$_POST['c'];

        echo "<div class='result-box'>";
        
        if ($a == 0) {
            echo "Ошибка: коэффициент 'a' не должен быть равен 0, иначе уравнение не является квадратным.";
        } else {
            // Находим дискриминант D по формуле из задания
            $d = pow($b, 2) - 4 * $a * $c;
            echo "Дискриминант (D) = <strong>$d</strong><br><br>";

            // Проверка условий алгоритма
            if ($d > 0) {
                // Два корня (исправлен знак во второй формуле для корректного вычисления)
                $x1 = (-$b + sqrt($d)) / (2 * $a);
                $x2 = (-$b - sqrt($d)) / (2 * $a);
                echo "D > 0, уравнение имеет два корня:<br>";
                echo "x1 = <strong>" . round($x1, 4) . "</strong><br>";
                echo "x2 = <strong>" . round($x2, 4) . "</strong>";
            } elseif ($d < 0) {
                // Корней нет
                echo "D < 0: <strong>Нет корней</strong> (в действительных числах)";
            } else {
                // D == 0, один корень
                $x = -$b / (2 * $a);
                echo "D = 0, уравнение имеет один корень:<br>";
                echo "x = <strong>" . round($x, 4) . "</strong>";
            }
        }
        
        echo "</div>";
    }
    ?>
</div>

</body>
</html>


