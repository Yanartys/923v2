<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание № 13 — Вывод по GET-параметру</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; color: #333; }
        .container { max-width: 750px; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin: 0 auto; }
        h1 { color: #2c3e50; font-size: 24px; margin-top: 0; }
        h3 { color: #2c3e50; margin-bottom: 5px; }
        ul { font-size: 16px; list-style-type: disc; padding-left: 20px; line-height: 1.8; }
        .nav-links { margin-bottom: 25px; padding: 15px; background: #e9ecef; border-radius: 6px; }
        .nav-links a { color: #007bff; text-decoration: none; margin-right: 12px; font-weight: bold; }
        .nav-links a:hover { text-decoration: underline; }
        .alert { padding: 15px; background-color: #fff3cd; color: #856404; border: 1px solid #ffeeba; border-radius: 4px; }
    </style>
</head>
<body>

<div class="container">
    <h1>Вывод треков выбранного альбома</h1>
    <hr>

    <?php
    require 'albums.php'; 
    require 'tracks.php';

    echo '<div class="nav-links">';
    echo '<strong>Выберите альбом для просмотра:</strong><br><br>';
    foreach ($albums as $album_item) {
        echo "<a href='?id={$album_item['id_album']}'>Альбом {$album_item['id_album']}</a>";
    }
    echo '</div>';

    if (isset($_GET['id'])) {
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
            echo "<div class='alert'>Альбом с ID = " . htmlspecialchars($target_id) . " не найден в базе данных.</div>";
        }

    } else {
        echo "<div class='alert'>Идентификатор альбома не передан. Нажмите на любую ссылку выше или добавьте в конец адреса строки <code>?id=2</code></div>";
    }
    ?>
</div>

</body>
</html>
