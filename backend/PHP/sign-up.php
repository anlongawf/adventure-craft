<?php
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=authme", "root", "Sqrtfl0@t01");
    if (isset($_POST["username"],$_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT COUNT(*) FROM users WHERE realName = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);
        $count = $stmt->fetchColumn();
        if ($count <= 0){
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (name,realName, passWord) VALUES (?,?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([strtolower($username),$username, $hashedPassword]);
            echo "Success";
        } else {
            echo "Exist";
        }
    }
?>