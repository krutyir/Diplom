<?php 

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $link = mysqli_connect("localhost", "root", "root", "reg1");

    mysqli_query($link,"ALTER TABLE `users` AUTO_INCREMENT = 1");
    // mysqli_query($link,"ALTER TABLE `blog` AUTO_INCREMENT = 1");
?>