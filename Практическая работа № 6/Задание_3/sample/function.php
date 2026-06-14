<?php

function fnOutTrack($arr, $albumId) {
    echo "<table border='1' cellpadding='8' style='border-collapse: collapse; margin-top: 15px;'>
            <tr>
                <th>ID трека</th>
                <th>Название трека</th>
                <th>Примечание</th>
                <th>Альбом</th>
            </tr>";

    foreach ($arr as $item) {
        if ($item['id_album'] == $albumId) {
            echo "<tr>
                    <td>{$item['id_track']}</td>
                    <td>{$item['name']}</td>
                    <td>{$item['note']}</td>
                    <td>{$item['id_album']}</td>
                  </tr>";
        }
    }

    echo "</table>";
}
?>
