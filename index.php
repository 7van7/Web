<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>VILLO</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body >

<!-- Форма авторизации -->
    <img class="wave" src="img/wave.png" width="700" height="250">
    <div class="container">
        <div class="img">
            <img src="img/1.svg"  >
        </div>
        <div class="login-content">
    <form action="vendor/signin.php" method="post">
                <img src="img/avatar.svg">
                <h2 class="title">Привет студент </h2>
                <div class="input-div one">
                   <div class="i">
                        <i class="fas fa-user"></i>
                   </div>
                   <div class="div">
             <h5>Логин</h5>
             <input type="text" name="login" class="input">
              </div>
                </div>
                   <div class="input-div pass">
                  <div class="i"> 
                     <i class="fas fa-lock"></i>
                  </div>
             <div class="div">      
       <h5>Пароль</h5>
        <input type="password" name="password" class="input">
        </div>
        </div>
                <a href="#"> У вас нет аккаунта?  <a href="/register.php">зарегистрируйтесь</a>
                <input type="submit" class="btn" value="Войти">
            </form>
        </div>
    </div>
     
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
   
    </div>
    </div>
 <script type="text/javascript" src="js/main.js"></script>
</body>
</html>