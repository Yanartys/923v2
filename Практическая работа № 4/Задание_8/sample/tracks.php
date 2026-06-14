<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание № 8 — Все циклы</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; color: #333; }
        .container { max-width: 900px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin: 0 auto; }
        h2 { color: #2c3e50; border-bottom: 2px solid #007bff; padding-bottom: 10px; margin-top: 0; text-align: center; }
        h3 { color: #007bff; margin-top: 40px; margin-bottom: 10px; border-bottom: 1px dashed #ccc; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin: 15px 0; background: white; box-shadow: 0 2px 3px rgba(0,0,0,0.05); }
        th, td { border: 1px solid #ddd; padding: 10px 12px; text-align: left; }
        th { background-color: #f8f9fa; font-weight: bold; }
        tr:nth-child(even) { background-color: #fdfdfd; }
        ul, ol { line-height: 1.6; padding-left: 25px; }
        li { margin-bottom: 4px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Задание № 8: Обработка массива всеми видами циклов</h2>

    <?php
    $track = array(
        array('id_track' => '1', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
        array('id_track' => '2', 'name' => 'Last Child', 'note' => '', 'id_album' => '10'),
        array('id_track' => '3', 'name' => 'Rats in the Cellar', 'note' => '', 'id_album' => '10'),
        array('id_track' => '4', 'name' => 'Combination', 'note' => '', 'id_album' => '10'),
        array('id_track' => '5', 'name' => 'Sick as a Dog', 'note' => '', 'id_album' => '10'),
        array('id_track' => '6', 'name' => 'Come Together', 'note' => '', 'id_album' => '10'),
        array('id_track' => '7', 'name' => 'Get the Lead Out', 'note' => '', 'id_album' => '10'),
        array('id_track' => '8', 'name' => 'Lick and a Promise', 'note' => '', 'id_album' => '10'),
        array('id_track' => '9', 'name' => 'Home Tonight', 'note' => '', 'id_album' => '10'),
        array('id_track' => '10', 'name' => 'Come Together', 'note' => '', 'id_album' => '4'),
        array('id_track' => '11', 'name' => 'Something', 'note' => '', 'id_album' => '4'),
        array('id_track' => '12', 'name' => 'Maxwell\'s Silver Hammer', 'note' => '', 'id_album' => '4'),
        array('id_track' => '13', 'name' => 'Oh! Darling', 'note' => '', 'id_album' => '4'),
        array('id_track' => '14', 'name' => 'Octopus\'s Garden', 'note' => '', 'id_album' => '4'),
        array('id_track' => '15', 'name' => 'I Want You (She\'s So Heavy)', 'note' => '', 'id_album' => '4'),
        array('id_track' => '16', 'name' => 'Here Comes the Sun', 'note' => '', 'id_album' => '4'),
        array('id_track' => '17', 'name' => 'Because', 'note' => '', 'id_album' => '4'),
        array('id_track' => '18', 'name' => 'You Never Give Me Your Money', 'note' => '', 'id_album' => '4'),
        array('id_track' => '19', 'name' => 'Sun King', 'note' => '', 'id_album' => '4'),
        array('id_track' => '20', 'name' => 'Mean Mr Mustard', 'note' => '', 'id_album' => '4'),
        array('id_track' => '21', 'name' => 'Polythene Pam', 'note' => '', 'id_album' => '4'),
        array('id_track' => '22', 'name' => 'Shine On You Crazy Diamond (Part One)', 'note' => '', 'id_album' => '2'),
        array('id_track' => '23', 'name' => 'Welcome to the Machine', 'note' => '', 'id_album' => '2'),
        array('id_track' => '24', 'name' => 'Have a Cigar', 'note' => '', 'id_album' => '2'),
        array('id_track' => '25', 'name' => 'Wish You Were Here', 'note' => '', 'id_album' => '2'),
        array('id_track' => '26', 'name' => 'Shine On You Crazy Diamond (Part Two)', 'note' => '', 'id_album' => '2'),
        array('id_track' => '27', 'name' => 'Speak to Me', 'note' => '', 'id_album' => '1'),
        array('id_track' => '28', 'name' => 'Breathe (In the Air)', 'note' => '', 'id_album' => '1'),
        array('id_track' => '29', 'name' => 'On the Run', 'note' => '', 'id_album' => '1'),
        array('id_track' => '30', 'name' => 'Time', 'note' => '', 'id_album' => '1'),
        array('id_track' => '31', 'name' => 'The Great Gig in the Sky', 'note' => '', 'id_album' => '1'),
        array('id_track' => '32', 'name' => 'Money', 'note' => '', 'id_album' => '1'),
        array('id_track' => '33', 'name' => 'Us and Them', 'note' => '', 'id_album' => '1'),
        array('id_track' => '34', 'name' => 'Any Colour You Like', 'note' => '', 'id_album' => '1'),
        array('id_track' => '35', 'name' => 'Brain Damage', 'note' => '', 'id_album' => '1'),
        array('id_track' => '36', 'name' => 'Eclipse', 'note' => '', 'id_album' => '1'),
        array('id_track' => '37', 'name' => 'Hells Bells', 'note' => '', 'id_album' => '6'),
        array('id_track' => '38', 'name' => 'Shoot to Thrill', 'note' => '', 'id_album' => '6'),
        array('id_track' => '39', 'name' => 'What Do You Do for Money Honey', 'note' => '', 'id_album' => '6'),
        array('id_track' => '40', 'name' => 'Given the Dog a Bone', 'note' => '', 'id_album' => '6'),
        array('id_track' => '41', 'name' => 'Let Me Put My Love Into You', 'note' => '', 'id_album' => '6'),
        array('id_track' => '42', 'name' => 'Back in Black', 'note' => '', 'id_album' => '6'),
        array('id_track' => '43', 'name' => 'You Shook Me All Night Long', 'note' => '', 'id_album' => '6'),
        array('id_track' => '44', 'name' => 'Have a Drink on Me', 'note' => '', 'id_album' => '6'),
        array('id_track' => '45', 'name' => 'Shake a Leg', 'note' => '', 'id_album' => '6'),
        array('id_track' => '46', 'name' => 'Rock and Roll Ain\'t Noise Pollution', 'note' => '', 'id_album' => '6'),
        array('id_track' => '47', 'name' => 'Strange Days', 'note' => '', 'id_album' => '0'),
        array('id_track' => '48', 'name' => 'You\'re Lost Little Girl', 'note' => '', 'id_album' => '11'),
        array('id_track' => '49', 'name' => 'Love Me Two Times', 'note' => '', 'id_album' => '11'),
        array('id_track' => '50', 'name' => 'Unhappy Girl', 'note' => '', 'id_album' => '11'),
        array('id_track' => '51', 'name' => 'Horse Latitudes', 'note' => '', 'id_album' => '11'),
        array('id_track' => '52', 'name' => 'Moonlight Drive', 'note' => '', 'id_album' => '11'),
        array('id_track' => '53', 'name' => 'People Are Strange', 'note' => '', 'id_album' => '11'),
        array('id_track' => '54', 'name' => 'My Eyes Have Seen You', 'note' => '', 'id_album' => '11'),
        array('id_track' => '55', 'name' => 'I Can\'t See Your Face in My Mind', 'note' => '', 'id_album' => '11'),
        array('id_track' => '56', 'name' => 'When the Music\'s Over', 'note' => '', 'id_album' => '11')
    );

    $total_tracks = count($track);
    ?>

    <h3>1. Цикл do-while (маркированный список)</h3>
    <ul>
        <?php
        $i = 0;
        if ($total_tracks > 0) {
            do {
                $item = $track[$i];
                echo "<li>(" . htmlspecialchars($item['id_track']) . ") " . htmlspecialchars($item['name']) . "</li>";
                $i++;
            } while ($i < $total_tracks);
        }
        ?>
    </ul>

    <h3>2. Цикл for (нумерованный список)</h3>
    <ol>
        <?php
        for ($i = 0; $i < $total_tracks; $i++) {
            $item = $track[$i];
            echo "<li> : (" . htmlspecialchars($item['id_track']) . ") " . htmlspecialchars($item['name']) . " (id альбома: " . htmlspecialchars($item['id_album']) . ")</li>";
        }
        ?>
    </ol>

    <h3>3. Цикл foreach (табличное представление)</h3>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Трек</th>
                <th>Примечание</th>
                <th>Id-альбома</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($track as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['id_track']) ?></td>
                    <td><?= htmlspecialchars($item['name']) ?></td>
                    <td><?= htmlspecialchars($item['note']) ?></td>
                    <td><?= htmlspecialchars($item['id_album']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h3>4. Цикл while (табличное представление)</h3>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Трек</th>
                <th>Примечание</th>
                <th>Id-альбома</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            while ($i < $total_tracks) {
                $item = $track[$i];
                ?>
                <tr>
                    <td><?= htmlspecialchars($item['id_track']) ?></td>
                    <td><?= htmlspecialchars($item['name']) ?></td>
                    <td><?= htmlspecialchars($item['note']) ?></td>
                    <td><?= htmlspecialchars($item['id_album']) ?></td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </tbody>
    </table>

</div>

</body>
</html>
