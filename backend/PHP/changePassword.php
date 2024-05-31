<?php
    session_start();
    if (isset($_POST["changePassword"])){
        $username = $_SESSION["taiKhoan"];
        $password = $_POST["changePassword"];
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $conn = new PDO("mysql:host=adventurecraft.site;dbname=authme","antrc2","Sqrtfl0@t01");
        $conn->prepare("UPDATE users SET passWord='$hashedPassword' where realName = '$username'")
    }
?>