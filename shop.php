<?php
    session_start();
    if(!isset($_SESSION["taiKhoan"])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="asset/IMG/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="asset/CSS/shop.css" />
    <link rel="stylesheet" href="asset/CSS/shop/Base.css">
    <link rel="stylesheet" href="asset/CSS/shop/Header.css">
    <link rel="stylesheet" href="asset/CSS/shop/Footer.css">
    <link rel="stylesheet" href="asset/CSS/shop/Main.css">
    <link rel="stylesheet" href="asset/CSS/shop/Navbar.css">
    <link rel="stylesheet" href="asset/CSS/shop/shop.css">
    <link rel="stylesheet" href="asset/CSS/shop/Framework.css">
    <link rel="stylesheet" href="asset/fonts/fontawesome-free-6.5.2-web/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap">
    <link rel="stylesheet" href="asset/CSS/nav.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>





    <title>Adventure Craft - Shop</title>
    <script src="backend/JS/shop.js"></script>
    <script src="backend/JS/check-login.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        checkLogin();
    });
    </script>
    <script src="asset/JS/nav.js"></script>

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


    <!--=== Header ===-->
    <header class="header header-text">
        <h1>Shop</h1>
        <span>Chào mừng bạn đến với cửa hàng Adventure Craft!.</span>
    </header>

    <!--=== Main content ===-->
    <main class="main">
        <div class="container">
            <!-- shop rank -->
            <div class="main-title flex">
                <img src="asset/IMG/rank.jpeg" alt="image of box illustration">
                <h1 class="m-desktop-title">Shop Rank</h1>
                <h1 class="m-mobile-title">Shop Rank</h1>
            </div>


            <div class="rank-menu" id="rank">



            </div>





        </div>






        <!-- shop pet -->
        <div class="main-title flex">
            <img src="asset/IMG/pet.jpeg" alt="image of box illustration">
            <h1 class="m-desktop-title">Shop Pet</h1>
            <h1 class="m-mobile-title">Shop Pet</h1>
        </div>
        <div class="cards" id="pet"></div>

        </div>
    </main>

    <!--=== Popups Overlay ===-->

    <!--=== Page Popups ===-->

    </section>

    <!--=== Footer Section ===-->
    <footer class="footer">
        <div class="footer-items">
            <span class="sp-1">©2024 Adventure Craft.</span>

        </div>
        </div>
    </footer>

    <!--=== Alert Section ===-->
    <section class="alerts">
        <div class="alerts-popup alert-popup-sucess" id="success-add">
            <h3>Added to cart!</h2>
        </div>
    </section>

    <script src="/asset/JS/shop.js"></script>
    <script src="../JS/General.js"></script>


</body>

</html>