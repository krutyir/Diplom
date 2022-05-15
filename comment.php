<?php
session_start();
  require_once 'connect\connect.php';

  $name = $_SESSION['Login'];
  $comment = $_POST["text_comment"];
  $newsid = $_POST["id_news"];
  


  mysqli_query($connect, "INSERT INTO `comments` (`name`, `comment`, `id_news`) VALUES ('$name', '$comment', '$newsid')");// Добавляем комментарий в таблицу
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
?>