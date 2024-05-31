<?php
    session_start();
    if (isset($_POST["password"])){
        $username = $_SESSION["taiKhoan"];
        $password = $_POST["password"];
        $conn = new PDO("mysql:host=adventurecraft.site;dbname=authme","antrc2","Sqrtfl0@t01");
        $result = $conn->query("SELECT passWord from users WHERE realName = '$username'")->fetch();
        $oldPassword =  $result["passWord"];
        if (password_verify($password, $oldPassword)){
            echo true;
        } else {
            echo false;
        }
    }
?>