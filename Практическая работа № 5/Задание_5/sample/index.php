<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №5 — Универсальный поиск</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; color: #333; }
        .container { max-width: 750px; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin: 0 auto; }
        h1 { color: #2c3e50; font-size: 24px; margin-top: 0; }
        .nav-links { margin-bottom: 25px; padding: 12px; background: #e9ecef; border-radius: 6px; font-size: 14px; line-height: 1.6; }
        .nav-links a { color: #007bff; text-decoration: none; margin-right: 12px; font-weight: bold; }
        .result-box { padding: 15px; border: 1px solid #ddd; border-radius: 4px; background: #fafafa; }
        .result-box h3 { margin-top: 0; color: #28a745; }
    </style>
</head>
<body>

<div class="container">
    <h1>Универсальная поисковая система</h1>
    
    <div class="nav-links">
        <strong>Тестирование по примерам из задания:</strong><br>
        <a href="?search=teams::3">?search=teams::3 (Группа)</a> | 
        <a href="?search=albums::5">?search=albums::5 (Альбом)</a> | 
        <a href="?search=tracks::10">?search=tracks::10 (Трек)</a>
    </div>

    <div class="result-box">
        Найденная группа (ID: {$id}):</h3>";
                            echo "<strong>Название:</strong> " . htmlspecialchars($item['name']) . "<br>";
                            echo "<strong>Страна:</strong> " . htmlspecialchars($item['country']) . "<br>";
                            echo "<strong>Год основания:</strong> " . htmlspecialchars($item['date']) . "<br>";
                            echo "<strong>Стиль:</strong> " . htmlspecialchars($item['style']) . "<br>";
                            break;
                        }
                    }
                } elseif ($entity === 'albums') {
                    require_once 'dump/albums.php';
                    foreach ($albums as $item) {
                        if ($item['id_album'] == $id) {
                            $found_item = $item;
                            echo "<h3>Найденный альбом (ID: {$id}):</h3>";
                            echo "<strong>Название:</strong> " . htmlspecialchars($item['title']) . "<br>";
                            echo "<strong>Год выпуска:</strong> " . htmlspecialchars($item['date']) . "<br>";
                            echo "<strong>Страна:</strong> " . htmlspecialchars($item['country']) . "<br>";
                            break;
                        }
                    }
                } elseif ($entity === 'tracks') {
                    require_once 'dump/tracks.php';
                    foreach ($tracks as $item) {
                        if ($item['id_track'] == $id) {
                            $found_item = $item;
                            echo "<h3>Найденный трек (ID: {$id}):</h3>";
                            echo "<strong>Название:</strong> " . htmlspecialchars($item['name']) . "<br>";
                            echo "<strong>ID альбома:</strong> " . htmlspecialchars($item['id_album']) . "<br>";
                            break;
                        }
                    }
                } else {
                    echo "<p style='color:red;'>Ошибка: Неизвестная сущность '{$entity}'.</p>";
                    $found_item = true; 
                }

                if ($found_item === null) {
                    echo "<p style='color:orange;'>Запись с ID = {$id} в таблице '{$entity}' не найдена.</p>";
                }

            } else {
                echo "<p style='color:red;'>Ошибка: Неверный формат параметра. Ожидается entity::id</p>";
            }

        } else {
            echo "<p>Ожидание запроса... Нажмите на одну из ссылок выше для проверки.</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
