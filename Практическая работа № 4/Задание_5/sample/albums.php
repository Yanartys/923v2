<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание № 5 — Альбомы</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        table { width: 100%; max-width: 900px; border-collapse: collapse; margin: 20px auto; background: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-radius: 4px; overflow: hidden; }
        th, td { border: 1px solid #ddd; padding: 12px 15px; text-align: center; }
        th { background-color: #007bff; color: white; font-weight: bold; }
        tr:nth-child(even) { background-color: #f8f9fa; }
        tr:hover { background-color: #f1f1f1; }
        h2 { text-align: center; color: #2c3e50; }
    </style>
</head>
<body>

<h2>Список музыкальных альбомов</h2>

<?php
$album = array(
    array('id_album' => '1', 'title' => 'The Dark Side of the Moon', 'date' => '1973', 'country' => 'Великобритания', 'id_team' => '2'),
    array('id_album' => '2', 'title' => 'Wish You Were Here', 'date' => '1975', 'country' => 'Великобритания', 'id_team' => '2'),
    array('id_album' => '3', 'title' => 'Greatest Hits', 'date' => '1999', 'country' => 'США', 'id_team' => '2'),
    array('id_album' => '4', 'title' => 'Abbey Road', 'date' => '1969', 'country' => 'Великобритания', 'id_team' => '3'),
    array('id_album' => '5', 'title' => 'A Hard Day\'s Night', 'date' => '1964', 'country' => 'Великобритания', 'id_team' => '3'),
    array('id_album' => '6', 'title' => 'Back in Black', 'date' => '1980', 'country' => 'США', 'id_team' => '4'),
    array('id_album' => '7', 'title' => 'Highway to Hell', 'date' => '1979', 'country' => 'Австралия', 'id_team' => '4'),
    array('id_album' => '8', 'title' => 'The Razors Edge', 'date' => '1990', 'country' => 'Австралия', 'id_team' => '4'),
    array('id_album' => '9', 'title' => 'Let There Be Rock', 'date' => '1977', 'country' => 'ФРГ', 'id_team' => '4'),
    array('id_album' => '10', 'title' => 'Rocks', 'date' => '1982', 'country' => 'Великобритания', 'id_team' => '1'),
    array('id_album' => '11', 'title' => 'Strange Days', 'date' => '1967', 'country' => 'США', 'id_team' => '0'),
    array('id_album' => '12', 'title' => 'L.A. Woman', 'date' => '1971', 'country' => 'США', 'id_team' => '0'),
    array('id_album' => '13', 'title' => 'Greatest Hits', 'date' => '1978', 'country' => 'США', 'id_team' => '3')
);
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Альбом</th>
            <th>Дата выпуска</th>
            <th>Страна</th>
            <th>Идентификатор группы</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($album as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item['id_album']) ?></td>
                <td><?= htmlspecialchars($item['title']) ?></td>
                <td><?= htmlspecialchars($item['date']) ?></td>
                <td><?= htmlspecialchars($item['country']) ?></td>
                <td><?= htmlspecialchars($item['id_team']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
