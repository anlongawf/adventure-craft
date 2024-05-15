<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/CSS/reset.css">
    <link rel="stylesheet" href="asset/CSS/login.css">
    <link rel="stylesheet" href="asset/CSS/nav.css">
    <link rel="stylesheet" href="asset/CSS/nav-mobile.css">
    <link
      rel="stylesheet"
      href="asset/fonts/fontawesome-free-6.5.2-web/css/all.css"
    />
    <title>Adventure Craft - Đăng nhập!</title>
    <link rel="shortcut icon" href="asset/IMG/logo.jpeg" type="image/x-icon">
    <script src="backend/JS/login.js"></script>
</head>
<body>
  
    <!-- header -->
    <header class="header">
    </header>

    <!-- content -->
    <div class="main">
      <div class="form">
        <div>
          <h2 class="login-head">Đăng nhập</h2>
          <form method="POST" onsubmit="return valForm()">
            <div>
              <label class="login" for="">Tài khoản</label>
              <input type="text" id="username" name="taiKhoan"/>
              <div id="username-error" class="error"></div>
            </div>
            <div>
              <label class="password" for="">Mật khẩu</label>
              <input type="password" id="password" name="matKhau"/>
              <div id="password-error" class="error"></div>
            </div>
            <button class="sign-in" style="color: black;">Đăng nhập</button>
            <div id="output"></div>
            <div class="rot-reg"><p>Nếu bán chưa có tài khoản, bạn có thể đăng ký </p> <a href="sign-up.php" class="here" >tại đây</a></div>
          </form>
        </div>
      </div>
      <!-- <img src="./asset/IMG/background.png" alt="" class="img-right" /> -->
    </div>
  </body>
</body>
</html>