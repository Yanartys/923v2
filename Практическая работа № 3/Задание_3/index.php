<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание №3 — Вывод данных</title>
</head>
<body>

    <?php
    $user_data = [
        'surname'    => 'Лаврецкая',
        'name'       => 'Елизавета',
        'patronymic' => 'Викторовна',
        'login'      => 'elizaveta',
        'password'   => '12345',
        'email'      => 'lovel@mail.ru'
    ];
    ?>

    <h2>Вы успешно зарегистрированы на сайте</h2>

    <h3><?php echo $user_data['surname'] . ' ' . $user_data['name'] . ' ' . $user_data['patronymic']; ?></h3>

    <p>Логин: <?php echo $user_data['login']; ?></p>
    <p>E-mail: <?php echo $user_data['email']; ?></p>
    <p>Пароль: <?php echo $user_data['password']; ?></p>

</body>
</html>

