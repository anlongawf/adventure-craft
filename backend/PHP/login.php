<?php
    session_start();
    $connection = new PDO("mysql:host=127.0.0.1;dbname=authme", "root", "Sqrtfl0@t01");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST["username"],$_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hashedNewPassword = password_hash($password, PASSWORD_BCRYPT);
        $output = $connection->query("SELECT passWord FROM users WHERE realName LIKE '$username'")->fetchAll();
        if (count($output) !== 0){
            $check = $output[0]["passWord"];
            if (password_verify($password, $check)){
                echo "0";
                $_SESSION["taiKhoan"] = $username;
                // Đăng nhập thành công
            } else {
                echo "1";
                // Sai mật khẩu
            }
        } else {
            echo "2";
            // Tài khoản không tồn tại
        }
    }
?>