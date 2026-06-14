<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание № 14 — Комбинированный вывод</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; color: #333; }
        .container { max-width: 750px; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin: 0 auto; }
        h1 { color: #2c3e50; font-size: 24px; margin-top: 0; }
        h2 { color: #7f8c8d; font-size: 18px; margin-top: -10px; font-weight: normal; margin-bottom: 20px; }
        h3 { color: #2c3e50; margin-top: 20px; margin-bottom: 5px; }
        ol { font-size: 16px; font-weight: bold; line-height: 1.8; }
        ul { font-size: 14px; font-weight: normal; list-style-type: disc; padding-left: 20px; margin-top: 5px; margin-bottom: 10px; line-height: 1.8; }
        .nav-links { margin-bottom: 25px; padding: 15px; background: #e9ecef; border-radius: 6px; font-size: 14px; }
        .nav-links a { color: #007bff; text-decoration: none; margin-right: 12px; font-weight: bold; }
        .nav-links a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="container">
    <h1>Музыкальный каталог</h1>
    <h2>Задание № 14: Комбинированный вывод по условию</h2>
    <hr>

    <?php
    require 'albums.php'; 
    require 'tracks.php';

    echo '<div class="nav-links">';
    echo '<strong>Навигация:</strong> ';
    echo '<a href="?">Показать все альбомы</a> | ';
    echo '<strong>Выбрать один:</strong> ';
    foreach ($albums as $album_item) {
        echo "<a href='?id={$album_item['id_album']}'>{$album_item['id_album']}</a> ";
    }
    echo '</div>';

    if (isset($_GET['id']) && $_GET['id'] !== '') {
        
        $target_id = $_GET['id'];
        $album_found = false;

        foreach ($albums as $one_album) {
            if ($one_album['id_album'] == $target_id) {
                $album_found = true;
                
                echo "<h3>" . htmlspecialchars($one_album['title']) . " (" . htmlspecialchars($one_album['country']) . ")</h3>";
                echo "<ul>";
                
                foreach ($tracks as $one_track) {
                    if ($one_track['id_album'] == $one_album['id_album']) {
                        echo "<li>" . htmlspecialchars($one_track['name']) . "</li>";
                    }
                }
                
                echo "</ul>";
                break;
            }
        }

        if (!$album_found) {
            echo "<p style='color: red;'>Альбом с ID = " . htmlspecialchars($target_id) . " не найден.</p>";
        }

    } else {
        
        if (!empty($albums)) {
            echo "<ol>";

            foreach ($albums as $one_album) {
                echo "<li>" . htmlspecialchars($one_album['title']) . " (" . htmlspecialchars($one_album['country']) . ")";
                echo "<ul>";
                
                foreach ($tracks as $one_track) {
                    if ($one_track['id_album'] == $one_album['id_album']) {
                        echo "<li>" . htmlspecialchars($one_track['name']) . "</li>";
                    }
                }
                
                echo "</ul>";
                echo "</li>";
            }
            
            echo "</ol>";
        } else {
            echo "<p>Массив альбомов пуст.</p>";
        }
    }
    ?>
</div>

</body>
</html>
