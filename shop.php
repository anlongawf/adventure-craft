<?php
    session_start();
    //   function sql($command){
    // $connection = new PDO("mysql:host=localhost;dbname=playerpoints","root","Sqrtfl0@t01");
    // $data = $connection->query($command)->fetch();
    // return $data;
    // // "SELECT points FROM playerpoints_points INNER JOIN playerpoints_username_cache ON playerpoints_points.uuid = playerpoints_username_cache.uuid WHERE playerpoints_username_cache.username = '".$_SESSION["taiKhoan"]."'"
    // }
    // if (isset($_SESSION["taiKhoan"])){
    //     $name = "".$_SESSION['taiKhoan']."";
    // } else {
    //     header("Location: login.php");
    // }
    // // Lấy ra số point của người chơi
    // $command = sql("SELECT points FROM playerpoints_points INNER JOIN playerpoints_username_cache ON playerpoints_points.uuid = playerpoints_username_cache.uuid WHERE playerpoints_username_cache.username = '".$name."'");
    // if ($command === false){
    //     $point = 0;
    // } else {
    //     $point = $command["points"];
    // }
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


    <title>Adventure Craft - Shop</title>
    <script src="backend/JS/shop.js"></script>
    <script src="backend/JS/check-point.js"></script>
    <script src="backend/JS/check-login.js"></script>
    <script src="backend/JS/check-username.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        checkLogin();
        checkPoint("point");
        checkUsername("name-user");
    });
    </script>
</head>

<body>
    <!--=== Navbar for mobile ===-->
    <div class="menu-row">

        <span class="open-menu"><i class="fa-solid fa-bars"></i>Menu</span>
        <span class="close-menu">Đóng</span>
        <ul>
            <li>
                <a href="">Trang chủ</a>
            </li>
            <li>
                <p class="name-user">Tên nhân vật: </p>
            </li>
            <li> <span class="point"></span><i class="fa-solid fa-money-bill"></i></li>
            <li><a href="nap-the/">Nạp thẻ</a></li>
            <li><a href="">Shop</a></li>
            <li><a href="login.php" class="log-in">Đăng nhập</a></li>
            <li><a href="sign-up.php" class="register">Đăng ký</a></li>
            <li><a href="logout.php" class="log-out">Đăng xuất</a></li>
        </ul>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const openMenu = document.querySelector('.open-menu');
        const closeMenu = document.querySelector('.close-menu');
        const menuList = document.querySelector('.menu-row ul');

        // Mở menu khi click vào "Menu"
        openMenu.addEventListener('click', function() {
            menuList.style.display = 'block';
            openMenu.style.display = 'none';
            closeMenu.style.display = 'inline'; // Hiển thị chữ "Đóng"
        });

        // Đóng menu khi click vào "Đóng"
        closeMenu.addEventListener('click', function() {
            menuList.style.display = 'none';
            openMenu.style.display = 'inline'; // Hiển thị lại chữ "Menu"
            closeMenu.style.display = 'none'; // Ẩn chữ "Đóng" đi
        });
    });
    </script>





    <!--=== Navigation Bar ===-->
    <nav class="nav">
        <a class="nav-logo flex" href="index.php">
            <img src="asset/IMG/logo.jpeg" alt="Adventure Craft server logo" width="70px" height="70px">
            <h1>Adventure Craft</h1>
        </a>

        <!-- <div class="nav-list flex">
            <a class="nav-item-1" href="#!"><span>Home</span></a> 
            <a class="nav-item-2" href="#!"><span>Shop</span></a>
            <a class="nav-item-4" href="#!"><span>Discord</span></a> 
        </div> -->

        <div class="nav-bar">
            <div class="navbars-title flex">
                <p class="name-user"></p>
                <p class="point"></p>
            </div>


            <div class="navbars-title-right">

                <a href="nap-the/" class="donate">Nạp thẻ</a>
                <a href="logout.php" class="log-out">Đăng xuất</a>
                <a href="login.php" class="log-in">Đăng nhập</a>
                <a class="register" href="sign-up.php">Đăng kí</a>
            </div>

        </div>

        </div>
    </nav>

    <!--=== Navbar for mobile ===-->
    <section class="nav-mobile">
        <div class="nav-mobile-title flex">
            <div class="navbars-bars">
                <div class="bar bar-1"></div>
                <div class="bar bar-2"></div>
                <div class="bar bar-3"></div>
            </div>

            <div class="navbars-title flex">

                <a href="https://adventurecraft.site/"><img src="asset/IMG/logo.jpeg" alt="Adventure Craft server logo"
                        width="30px" height="30px"></a>
                <div class="user-name">

                    <p class="name-user"></p>
                    <span class="point"></span>
                </div>


                <div class="navbars-title-right">

                    <a href="nap-the/" class="donate">Nạp thẻ</a>
                    <a href="logout.php" class="log-out">Đăng xuất</a>
                    <a href="login.php" class="log-in">Đăng nhập</a>
                    <a class="register" href="sign-up.php">Đăng kí</a>
                </div>

            </div>
        </div>


    </section>

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


            <div class="rank-menu">
                <div class="card">
                    <img src="asset/IMG/copper-rank.svg" alt="Copper VIP Illustration">

                    <div class="card-content">
                        <h2>Copper VIP</h2>
                        <p>Thời gian: 30 ngày</p>
                        <h3>Quyền lợi:</h3>
                        <ul class="pms">
                            <li>
                                <p class="desc">Hiển thị icon rank <i class="fa-solid fa-check"></i></p>
                            </li>
                            <li>
                                <p class="desc">Sử dụng /craft <i class="fa-solid fa-check"></i></p>
                            </li>
                            <li>
                                <p class="desc">Mua được hiệu ứng /pe <i class="fa-solid fa-x"></i></p>
                            </li>
                            <li>
                                <p class="desc">Sỡ hữu được pet nepet <i class="fa-solid fa-check"></i></p>
                            </li>
                        </ul>

                    </div>
                    <button class="btn btn-dark" type="button">50 Xu</button>
                </div>

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