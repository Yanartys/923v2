<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание № 12 — Вложенные списки</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; color: #333; }
        .container { max-width: 750px; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin: 0 auto; }
        h1 { color: #2c3e50; font-size: 24px; margin-top: 0; }
        h2 { color: #7f8c8d; font-size: 18px; margin-top: -10px; font-weight: normal; }
        ol { font-size: 16px; font-weight: bold; line-height: 1.8; }
        ul { font-size: 14px; font-weight: normal; list-style-type: disc; padding-left: 20px; margin-top: 5px; margin-bottom: 10px; }
        li { margin-bottom: 5px; }
    </style>
</head>
<body>

<div class="container">
    <h1>Связанные данные</h1>
    <h2>Вложенные списки альбомов и треков</h2>
    <hr>

    <?php
    require 'albums.php'; 
    require 'tracks.php';

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
        echo "<p>Данные об альбомах не найдены в файле albums.php.</p>";
    }
    ?>
</div>

</body>
</html>
