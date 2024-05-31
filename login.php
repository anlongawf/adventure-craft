<?php
    session_start();
    if(isset($_SESSION["taiKhoan"])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/CSS/reset.css">
    <link rel="stylesheet" href="asset/CSS/login.css">
    <link rel="stylesheet" href="asset/CSS/nav.css">
    <link rel="stylesheet" href="asset/fonts/fontawesome-free-6.5.2-web/css/all.css" />
    <title>Adventure Craft - Đăng nhập!</title>
    <link rel="shortcut icon" href="asset/IMG/logo.jpeg" type="image/x-icon">
    <script src="backend/JS/login.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</head>

<body>
    <!--=== NAV ===-->

    <script src="asset/JS/nav.js"></script>
    <nav class="nav">
        <div class="lef">
            <i class="fa-solid fa-bars menu" style="color:white">Menu</i>
            <ul class="nav-left">
                <li>
                    <a href="index.php"><i class="fa-solid fa-house"></i> Trang chủ </a>
                </li>
                <li>
                    <a href="shop.php"><i class="fa-solid fa-shop"></i> Cửa hàng</a>
                </li>
                <li>
                    <a href="nap-the/"><i class="fa-solid fa-circle-dollar-to-slot"></i>Nạp thẻ</a>
                </li>
                <li>
                    <a href="/top/"><i class="fa-solid fa-chart-simple"></i>Bảng xếp hạng</a>
                </li>
            </ul>
        </div>
        <script src="backend/JS/check-login.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', () => {
            checkLogin();
        });
        </script>
        <div class="right">
            <span id="user" class="username">Đăng nhập</span>
            <img src="asset/IMG/avatar.png" alt="" class="avatar">
            <ul class="nav-right">
                <li>
                    <a href="profile.php"> <i class="fa-solid fa-user"></i>Thông tin </a>
                </li>
                <li>
                    <a href="nap-the/"><i class="fa-solid fa-circle-dollar-to-slot"></i> Nạp thẻ </a>
                </li>
                <li id="changePassword">
                    <a href="changePassword.php"><i class="fa-solid fa-rotate-right"></i>Đổi mật khẩu </a>
                </li>
                <li id="login">
                    <a href="login.php"><i class="fa-solid fa-right-from-bracket"></i>Đăng nhập</a>
                </li>
                <li id="sign-up">
                    <a href="sign-up.php"><i class="fa-solid fa-registered"></i>Đăng ký</a>
                </li>
                <li id="sign-out">
                    <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- content -->
    <div class="main">
        <div class="form">
            <div>
                <h2 class="login-head">Đăng nhập</h2>
                <form method="POST" onsubmit="return valForm()">
                    <div>
                        <label class="login" for="">Tài khoản</label>
                        <input type="text" id="username" name="taiKhoan" />
                        <div id="username-error" class="error"></div>
                    </div>
                    <div>
                        <label class="password" for="">Mật khẩu</label>
                        <input type="password" id="password" name="matKhau" />
                        <div id="password-error" class="error"></div>
                    </div>
                    <button class="sign-in" style="color: black;">Đăng nhập</button>
                    <div id="output"></div>
                    <div class="rot-reg">
                        <p>Nếu bán chưa có tài khoản, bạn có thể đăng ký </p> <a href="sign-up.php" class="here">tại
                            đây</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- <img src="./asset/IMG/background.png" alt="" class="img-right" /> -->
    </div>
</body>
</body>

</html>