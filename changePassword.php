<?php
    session_start();
    if(!isset($_SESSION["taiKhoan"])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/CSS/sign-up.css">
    <link rel="stylesheet" href="asset/CSS/nav.css">
    <link rel="stylesheet" href="asset/CSS/nav-mobile.css">
    <link rel="stylesheet" href="asset/fonts/fontawesome-free-6.5.2-web/css/all.css" />
    <link rel="shortcut icon" href="asset/IMG/logo.jpeg" type="image/x-icon" />
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <title>Adventure Craft - Đăng kí!</title>
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
            <img id="avt" src="asset/IMG/avatar.png" alt="" class="avatar">
            <ul class="nav-right">
                <li>
                    <a  href="profile.php"> <i class="fa-solid fa-user"></i>Thông tin </a>
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

        <script src="backend/JS/changePassword.js"></script>
    <div class="form">
        <h2>Đổi mật khẩu</h2>
        <form method="POST" onsubmit="return changePassword()">
            <div>
                <label for="">Mật khẩu cũ</label>
                <input type="password" id="matKhauCu" name="matKhauCu">
                <div class="error" id="matKhauCuError"><?= $matKhauCuError?></div>
            </div>
            <div>
                <label for="">Mật khẩu mới</label>
                <input type="password" id="matKhauMoi" name="matKhauMoi">
                <div class="error" id="matKhauMoiError"><?= $matKhauMoiError?></div>
            </div>
            <div>
                <label for="">Nhập lại mật khẩu</label>
                <input type="password" id="rePassword" name="nhapLaiMatKhau">
                <div class="error" id="rePasswordError"><?= $rePassword?></div>
            </div>
            <button class="reg" name="btn_changePassword" style="color: black">Đổi mật khẩu</button>
            <div id="output"></div>
            <div id="result"></div>
        </form>
    </div>

    </div>
</body>

</html>