<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="backend/JS/sign-up.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/CSS/sign-up.css">
    <link rel="stylesheet" href="asset/CSS/nav.css">
    <link rel="stylesheet" href="asset/CSS/nav-mobile.css">
    <link
      rel="stylesheet"
      href="asset/fonts/fontawesome-free-6.5.2-web/css/all.css"
    />
    <link rel="shortcut icon" href="asset/IMG/logo.jpeg" type="image/x-icon" />
    <script src="backend/JS/sign-up.js"></script>
    <title>Adventure Craft - Đăng kí!</title>
</head>
<body>
    <div>
        <div class="form">
        <h2>Đăng kí</h2>
        <form method="POST" onsubmit="return valFormSignUp()">
            <div>
                <label for="">Tài khoản</label>
                <input type="text" id="username" name="taiKhoan">
                <div class="error" id="usernameError"></div>
            </div>
            <div>
                <label for="">Mật khẩu</label>
                <input type="password" id="password" name="matKhau">
                <div class="error" id="passwordError"></div>
            </div>
            <div>
                <label for="">Nhập lại mật khẩu</label>
                <input type="password" id="rePassword" name="nhapLaiMatKhau">
                <div class="error" id="rePasswordError"></div>
            </div>
            <button class="reg" style="color: black">Đăng kí</button>
            <div id="output"></div>
            <div class="rot-reg"><p>Nếu bạn đã có tài khoản, bạn có thể đăng nhập </p> <a href="login.php" class="here" >tại đây</a></div>

        </form>
        </div>
        
    </div>
</body>
</html>