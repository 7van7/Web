<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: cube');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VILLO</title>
  
    
      <link rel="stylesheet" href="css/regirts.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
          <div class="wave"  >
         <img src="img/w.png" height="760" width="500" > 
         <!-- <img src="img/3.svg" height="780" width="500" >  -->

     </div>
       <div class="img"  >
       <img  src="img/2.png" height="700" width="600" > 
     </div>
      <div class="wrapper">
  <div class="contact-form">
    <div class="input-fields">
<div class="front">
         <h5>Фио</h5>
      <input type="text" class="input" name="fullname" placeholder="Введите свое полное имя">
       <h5>Логин</h5>
      <input type="text" class="input" name="login" placeholder="Введите Логин (номер зачетки)">
       <h5 >Изображение профиля</h5>
      <input  type="file" class="input" name="avatar" >
      <h5 >Номер группы </h5>
      <input type="text" class="input" name="number_groupe" placeholder="Введите номер группы">
      <h5 >Курс </h5>
      <input type="text" class="input" name="grade" placeholder="На каком курсе вы учитесь?">
      <h5 >Пароль </h5>
      <input type="text" class="input" name="password" placeholder="Введите пароль">
      <h5 >Подтверждение пароля </h5>
      <input type="text" class="input" name="password_confirm" placeholder="Подтвердите пароль">
      <a href="#" > У вас нет аккаунта?  <a href="/index.php">авторизируйтесь</a> </a>
         <input type="submit" class="btn" value="Войти">
         </div>
         
            <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </div>
    <div class="msg">
      <img src="img/2.svg" width="270" height="200">
    </div>
  </div>
</div>  
<script type="text/javascript" src="js/main.js"></script>
    </form>

</body>
</html>