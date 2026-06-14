<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        table { width: 100%; max-width: 850px; border-collapse: collapse; margin-top: 20px; background: white; }
        th, td { border: 1px solid #ddd; padding: 10px 12px; text-align: center; }
        th { background-color: #f8f9fa; font-weight: bold; }
    </style>
</head>
<body>

    <h1>Управляющие конструкции</h1>
    <h2>Циклы</h2>
    <hr>
    <h2>Вывод массива альбомов</h2>

    <?php
    require_once 'albums_data.php';
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
