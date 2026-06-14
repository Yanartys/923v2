<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
    <style>
        table { width: 100%; max-width: 800px; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #f8f9fa; font-weight: bold; }
    </style>
</head>
<body>

    <h1>Пользовательские функции</h1>
    <h2>Задание №2: Таблица альбомов</h2>
    <hr>

    <?php
    require "album.php";

    function fnOutAlbum($arr) {
        $out = "<table>
                <tr>
                    <th>ID</th>
                    <th>Альбом</th>
                    <th>Дата выпуска</th>
                    <th>Страна</th>
                </tr>";

        foreach ($arr as $item) {
            $out .= "<tr>
                        <td>{$item['id_album']}</td>
                        <td>{$item['title']}</td>
                        <td>{$item['date']}</td>
                        <td>{$item['country']}</td>
                     </tr>";
        }

        $out .= "</table>";

        return $out;
    }

    echo fnOutAlbum($album);
    ?>

</body>
</html>

