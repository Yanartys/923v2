<?php
// Проверяем наличие параметра (например, ?search=teams::1)
if (!empty($_GET['search'])) {
    
    // 1. Разбиваем строку на части
    $data = explode('::', $_GET['search']);
    $file = $data[0] ?? ''; // Название сущности (teams, albums или tracks)
    $id   = $data[1] ?? ''; // ID записи

    // 2. Путь к файлу в папке dump
    $path = "dump/{$file}.php";

    // 3. Проверяем, существует ли файл, и подключаем его
    if (file_exists($path)) {
        include $path; // Здесь загружается твой массив $content

        // 4. Ищем нужный ID в массиве $content
        foreach ($content as $item) {
            if ($item['id'] == $id) {
                echo "<h3>Результат из $file (ID $id):</h3>";
                foreach ($item as $key => $val) {
                    echo "<b>$key:</b> $val <br>";
                }
                exit; // Выходим, если нашли
            }
        }
        echo "Запись с таким ID не найдена.";
    } else {
        echo "Ошибка: Файл $path не найден. Проверьте папку dump.";
    }
} else {
    echo "Введите запрос, например: <b>?search=albums::4</b>";
}
?>
