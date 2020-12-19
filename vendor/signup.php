<?php

    session_start();
    require_once 'connect.php';
    $fullname = $_POST['fullname'];
    $login = $_POST['login'];
    $number_groupe = $_POST['number_groupe'];
    $grade = $_POST['grade'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
 
    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        }
  
       $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `fullname`, `login`, `number_groupe`, `grade`, `password`, `avatar`) VALUES (NULL, '$fullname', '$login', '$number_groupe', '$grade ', ' $password', '$path')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>
