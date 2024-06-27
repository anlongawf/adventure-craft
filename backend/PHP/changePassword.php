<?php
    session_start();
    if (isset($_POST["changePassword"])){
        $username = $_SESSION["taiKhoan"];
        $password = $_POST["changePassword"];
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $conn = new PDO("mysql:host=adventurecraft.site;dbname=dptadven_authme","dptadven_adventure","Sqrtfl0@t01");
        $check = $conn->prepare("UPDATE users SET passWord='$hashedPassword' where realName = '$username'")->execute();
        echo $check;
    }
?>