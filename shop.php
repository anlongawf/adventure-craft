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

            <div class="cards">
                <div class="card">
                    <img src="asset/IMG/copper-rank.svg" alt="Copper VIP Illustration">

                    <div class="card-content">
                        <h2>Copper VIP</h2>
                        <p>Thời gian: 30 ngày</p>
                        <h3>Quyền lợi:</h3>
                        <ul class="pms">
                            <li>
                                <p class="desc"></p>
                            </li>
                            <li>
                                <p class="desc"></p>
                            </li>
                            <li>
                                <p class="desc"></p>
                            </li>
                            <li>
                                <p class="desc"></p>
                            </li>
                        </ul>

                    </div>
                    <!-- <a class="btn btn-dark" href="#" id="buy-item-1" onclick="buyRank('staff')"></a> -->
                    <button class="btn btn-dark" type="button" onclick="buyRank('copper')">Mua Xu</button>
                </div>

                <div class="card">
                    <img src="asset/IMG/gold-rank.svg" alt="Image of Gold VIP">

                    <div class="card-content">
                        <h2>Gold VIP</h2>
                        <p>Thời gian: 30 ngày</p>
                        <h3>Quyền lợi:</h3>
                        <ul class="pms">
                            <li>
                                <p class="desc"></p>
                            </li>
                            <li>
                                <p class="desc"></p>
                            </li>
                            <li>
                                <p class="desc"></p>
                            </li>
                            <li>
                                <p class="desc"></p>
                            </li>
                        </ul>

                    </div>

                    <a class="btn btn-dark" href="#" id="buy-item-2">Mua</a>
                </div>

                <div class="card">
                    <img src="asset/IMG/diamind-rank.svg" alt="Image of Diamond VIP">

                    <div class="card-content">
                        <h2>Diamond VIP</h2>
                        <p>Thời gian: 30 ngày</p>
                        <h3>Quyền lợi:</h3>
                        <ul class="pms">
                            <li>
                                <p class="desc"></p>
                            </li>
                            <li>
                                <p class="desc"></p>
                            </li>
                            <li>
                                <p class="desc"></p>
                            </li>
                            <li>
                                <p class="desc"></p>
                            </li>
                        </ul>

                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyRank('gold')">Mua</button>
                </div>

                <div class="card card-cosmetics">
                    <img src="asset/IMG/nether-rank.svg" alt="Image of cosmetics">

                    <div class="card-content">
                        <h2>Netherite</h2>
                        <p>Thời gian: 30 ngày</p>
                        <h3>Quyền lợi:</h3>
                        <ul class="pms">
                            <li>
                                <p class="desc"></p>
                            </li>
                            <li>
                                <p class="desc"></p>
                            </li>
                            <li>
                                <p class="desc"></p>
                            </li>
                            <li>
                                <p class="desc"></p>
                            </li>
                        </ul>


                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyRank('staff')">Mua</button>

                </div>
            </div>

            <!-- shop pet -->
            <div class="main-title flex">
                <img src="asset/IMG/pet.jpeg" alt="image of box illustration">
                <h1 class="m-desktop-title">Shop Pet</h1>
                <h1 class="m-mobile-title">Shop Pet</h1>
            </div>

            <div class="cards">
                <div class="card">
                    <img src="asset/IMG/Capybara.png" alt="Copper VIP Illustration">

                    <div class="card-content">
                        <h2>Capybara</h2>
                        <p>Skin: 0</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-check"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-x"></i></p>
                        <br>
                        <p><strong>Giá bán: 60 xu</strong></p>
                    </div>
                    <!-- <a class="btn btn-dark" href="#" id="buy-item-1" onclick="buyRank('staff')"></a> -->
                    <button class="btn btn-dark" type="button" onclick="buyPet('pet1')">Mua</button>
                </div>

                <div class="card">
                    <img src="asset/IMG/Warrior.png" alt="Image of Gold VIP">

                    <div class="card-content">
                        <h2>Warrior</h2>
                        <p>Skin: 0</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-x"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-x"></i></p>
                        <br>
                        <p><strong>Giá bán: 35 xu</strong></p>
                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyPet('pet2')">Mua</button>
                </div>

                <div class="card">
                    <img src="asset/IMG/DarkKnight.png" alt="Image of Diamond VIP">

                    <div class="card-content">
                        <h2>Dark Knight</h2>
                        <p>Skin: 0</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-x"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-x"></i></p>
                        <br>
                        <p><strong>Giá bán: 35 xu</strong></p>
                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyPet('pet1')">Mua</button>
                </div>

                <div class="card card-cosmetics">
                    <img src="asset/IMG/Paladin.png" alt="Image of cosmetics">

                    <div class="card-content">
                        <h2>Paladin</h2>
                        <p>Skin: 0</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-x"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-x"></i></p>
                        <br>
                        <p><strong>Giá bán: 35 xu</strong></p>
                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyPet('pet2')">Mua</button>

                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="asset/IMG//DragonWarrior.png" alt="Copper VIP Illustration">

                    <div class="card-content">
                        <h2>Dragon Warrior</h2>
                        <p>Skin: 0</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-x"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-x"></i></p>
                        <br>
                        <p><strong>Giá bán: 35 xu</strong></p>
                    </div>
                    <!-- <a class="btn btn-dark" href="#" id="buy-item-1" onclick="buyRank('staff')"></a> -->
                    <button class="btn btn-dark" type="button" onclick="buyPet('pet1')">Mua</button>
                </div>

                <div class="card">
                    <img src="asset/IMG/Assassin.png" alt="Image of Gold VIP">

                    <div class="card-content">
                        <h2>Assassin</h2>
                        <p>Skin: 0</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-x"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-x"></i></p>
                        <br>
                        <p><strong>Giá bán: 35 xu</strong></p>
                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyPet('pet2')">Mua</button>
                </div>

                <div class="card">
                    <img src="asset/IMG/MartialArtist.png" alt="Image of Diamond VIP">

                    <div class="card-content">
                        <h2>Martial Artist</h2>
                        <p>Skin: 0</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-x"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-x"></i></p>
                        <br>
                        <p><strong>Giá bán: 35 xu</strong></p>
                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyPet('pet1')">Mua</button>
                </div>

                <div class="card card-cosmetics">
                    <img src="asset/IMG/NinjaSamurai.png" alt="Image of cosmetics">

                    <div class="card-content">
                        <h2>Ninja Samurai</h2>
                        <p>Skin: 0</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-x"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-x"></i></p>
                        <br>
                        <p><strong>Giá bán: 35 xu</strong></p>
                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyPet('pet2')">Mua</button>

                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="asset/IMG/Reaper.png" alt="Copper VIP Illustration">

                    <div class="card-content">
                        <h2>Reaper</h2>
                        <p>Skin: 0</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-x"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-x"></i></p>
                        <br>
                        <p><strong>Giá bán: 35 xu</strong></p>
                    </div>
                    <!-- <a class="btn btn-dark" href="#" id="buy-item-1" onclick="buyRank('staff')"></a> -->
                    <button class="btn btn-dark" type="button" onclick="buyPet('pet1')">Mua</button>
                </div>

                <div class="card">
                    <img src="asset/IMG/Pegasus.png" alt="Image of Gold VIP">

                    <div class="card-content">
                        <h2>Pegasus</h2>
                        <p>Skin: 0</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-check"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-check"></i></p>
                        <br>
                        <p><strong>Giá bán: 150 xu</strong></p>
                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyPet('pet2')">Mua</button>
                </div>

                <div class="card">
                    <img src="asset/IMG/SpatanHorse.png" alt="Image of Diamond VIP">

                    <div class="card-content">
                        <h2>Spatan Horse</h2>
                        <p>Skin: 4</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-check"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-x"></i></p>
                        <br>
                        <p><strong>Giá bán: 89 xu</strong></p>

                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyPet('pet1')">Mua</button>
                </div>

                <div class="card card-cosmetics">
                    <img src="asset/IMG/Kitsune.png" alt="Image of cosmetics">

                    <div class="card-content">
                        <h2>Kitsune</h2>
                        <p>Skin: 3</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-check"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-check"></i></p>
                        <br>
                        <p><strong>Giá bán: 179 xu</strong></p>
                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyPet('pet2')">Mua</button>

                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="asset/IMG/Ghostfantom.png" alt="Image of Gold VIP">


                    <div class="card-content">
                        <h2>Ghost fantom</h2>
                        <p>Skin: 2</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-check"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-check"></i></p>
                        <br>
                        <p><strong>Giá bán: 169 xu</strong></p>
                    </div>
                    <!-- <a class="btn btn-dark" href="#" id="buy-item-1" onclick="buyRank('staff')"></a> -->
                    <button class="btn btn-dark" type="button" onclick="buyPet('pet1')">Mua</button>
                </div>

                <div class="card">
                    <img src="asset/IMG/Phoenix.png" alt="Image of Gold VIP">

                    <div class="card-content">
                        <h2>Phoenix</h2>
                        <p>Skin: 4</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-check"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-check"></i></p>
                        <br>
                        <p><strong>Giá bán: 189 xu</strong></p>
                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyPet('pet2')">Mua</button>
                </div>

                <div class="card">
                    <img src="asset/IMG/ForestTurker.png" alt="Image of Diamond VIP">

                    <div class="card-content">
                        <h2>Forest Turker</h2>
                        <p>Skin: 3</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-check"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-x"></i></p>
                        <br>
                        <p><strong>Giá bán: 79 xu</strong></p>
                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyPet('pet1')">Mua</button>
                </div>

                <div class="card card-cosmetics">
                    <img src="asset/IMG/DireWolfhawk.png" alt="Image of cosmetics">

                    <div class="card-content">
                        <h2>Dire Wolfhawk</h2>
                        <p>Skin: 4</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-check"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-check"></i></p>
                        <br>
                        <p><strong>Giá bán: 210 xu</strong></p>
                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyPet('pet2')">Mua</button>

                </div>
            </div>
            <div class="cards">

                <div class="card card-cosmetics">
                    <img src="asset/IMG/GreenWyvern.png" alt="Image of cosmetics">

                    <div class="card-content">
                        <h2>Green Wyvern</h2>
                        <p>Skin: 4</p>
                        <p>Thú cưỡi: <i class="fa-solid fa-check"></i></p>
                        <p>Có thể bay: <i class="fa-solid fa-check"></i></p>
                        <br>
                        <p><strong>Giá bán: 210 xu</strong></p>
                    </div>

                    <button class="btn btn-dark" type="button" onclick="buyPet('pet2')">Mua</button>

                </div>
            </div>
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