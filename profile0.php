<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Профиль  <label>Адрес</label>
        <input type="text" name="address" placeholder="Введите ваш адрес ">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Группа</label>
        <input type="text" name="group" placeholder="Введите номер группы">
        <label>ПОЛ</label>
        <input type="radio" name="gender" > Чай<input type="radio" name="gender" > Кофе</p> -->

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['fullname'] ?></h2>
        <a href="#"><?= $_SESSION['user']['number_groupe'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

 </body>
</html>