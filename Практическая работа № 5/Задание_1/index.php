<?php

$content = array(
  array('id' => '1','name' => 'Aerosmith','country' => 'США','date' => '1970','style' => 'хард-рок'),
  array('id' => '2','name' => 'Pink Floyd','country' => 'Великобритания','date' => '1965','style' => 'психоделический-рок'),
  array('id' => '3','name' => 'The Beatles','country' => 'Великобритания','date' => '1960','style' => 'рок-н-ролл'),
  array('id' => '4','name' => 'AC/DC','country' => 'Австралия','date' => '1973','style' => 'хард-блюз-рок'),
  array('id' => '5','name' => 'Scorpions','country' => 'ФРГ','date' => '1965','style' => 'хард-рок'),
  array('id' => '6','name' => 'Ленинград','country' => 'Россия','date' => '1997','style' => 'ска, фолк, панк')
);
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $found = false;

    foreach ($content as $team) {
        if ($team['id'] == $id) {
            echo "<h2>Информация о группе:</h2>";
            echo "Название: " . $team['name'] . "<br>";
            echo "Страна: " . $team['country'] . "<br>";
            echo "Год: " . $team['date'] . "<br>";
            echo "Стиль: " . $team['style'] . "<br>";
            $found = true;
            break;
        }
    }

    if (!$found) {
        echo "Группа с ID $id не найдена.";
    }

} else {
    echo "<h2>Список всех групп:</h2>";
    foreach ($content as $team) {
        echo $team['id'] . ". " . $team['name'] . " (" . $team['style'] . ")<br>";
    }
}
?>
