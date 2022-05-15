<?php 
    require 'connect/connect.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <style>
    .raz4 {  
  padding: .5em;  
  text-decoration: none;  
  color: rgb(0, 0, 0);  
  background: no-repeat;  
  background-image: linear-gradient(red, red), linear-gradient(red, red), linear-gradient(red, red), linear-gradient(red, red);  
  background-size: 2px 0, 2px 0, 0 2px, 0 2px;  
  background-position: 0 50%, 100% 50%, 50% 0, 50% 100%;  
  display: center;
}  
.raz4:active {  
  background: rgb(0, 0, 0);  
}  
.raz4:hover {  
  transition: .7s;  
  background-size: 2px 100%, 2px 100%, 100% 2px, 100% 2px;  
  border-radius: 5px;  
}
</style>
</head>
<body>
<div class="container mt-4">
    <?php 
        if(!$_SESSION['user']){
    ?>
        <div class="row">
        <div class="col">
    <form action="action/action.php" method="POST">
        <span>Логин:</span>
        <input type="text" onkeyup="this.value = this.value.replace(/[^\w]/g,'');" type="text" name="login">
        <span>E-mail:</span>
        <input type="email" name="email">
        <span>Пароль:</span>
        <input type="password" name="pass">
        <span>Подтверждение пароля:</span>
        <input type="password" name="pass2"> <span></span>
        <input class="raz4" type="submit" value="Регистрация" name="signup">
    </form>
        </div>
    <form action="action/action.php" method="POST">
        <span>Логин/E-mail:</span>
        <input type="text" name="login">
        <span>Пароль:</span>
        <input type="password" name="pass"> <span></span>
        <input class="raz4" type="submit" value="Авторизация" name="signin">
    </form>
        </div>
    <?php 
        }else{
    ?>
    <span>Здравствуй, <a href="action/action.php?logout="><?= $_SESSION['user']['login']; ?></a></span>
    <?php 
        }
    ?>
</body>
</html>
<?php
    require 'connect/connect.php';
?>