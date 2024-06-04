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
    <!-- <script src="backend/JS/shop.js"></script> -->
    <script src="backend/JS/check-login.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        checkLogin();
    });
    </script>
    <script src="asset/JS/nav.js"></script>

</head>

<body>

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
                    <a href="#" class="top-ingame"><i class="fa-solid fa-chart-simple"></i>Bảng xếp hạng </a>
                </li>
            </ul>
            <ul class="sub-menu">
                <li>
                    <a href="top/point.php"><i class="fa-solid fa-certificate"></i> Bảng xếp hạng Xu</a>
                </li>
                <li>
                    <a href="top/money.php"><i class="fa-solid fa-certificate"></i> Bảng xếp hạng Money</a>
                </li>
                <li>
                    <a href="top/level.php"><i class="fa-solid fa-certificate"></i> Bảng xếp hạng cấp độ</a>
                </li>
            </ul>

        </div>
        <script src="../backend/JS/check-login2.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', () => {
            checkLogin();
        });
        </script>
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
            <?php 
                require_once "backend/PHP/function.php";
                $rank = sqlCommand("shop","SELECT * FROM shoprank")->fetchAll();
                $pet = sqlCommand("shop","SELECT * FROM shoppet")->fetchAll();
            ?>
            <div class="rank-menu" id="rank">
                <?php foreach ($rank as $value): ?>
            <div class="card">
    <img src="asset/img-ranks/<?= $value['rank_img']?>" alt="Copper VIP Illustration">
    <div class="card-content">
        <h2><?= $value['rank_nameRank']?></h2>
        <p>Thời gian: 30 ngày</p>
        <h3>Quyền lợi:</h3>
        <ul class="pms">
            <?php
                $group = $value['rank_group'];
                $quyenLoi = sqlCommand("shop","SELECT quyen_loi FROM quyenloi WHERE rank_group = '$group'")->fetchAll();
                foreach ($quyenLoi as $item):
            ?>
            <li>
                <p class="desc"><?= $item['quyen_loi']?></p>
            </li>
            <?php endforeach ?>
            
        </ul>

    </div>
    <form action="" method="POST">
        <button name="<?= $value['rank_group']?>" class="btn btn-dark" type="button"><?= $value['rank_price']?> Xu</button>
    </form>
        </div>
        <?php endforeach ?>
            </div>
        </div>
        <!-- shop pet -->
        <div class="main-title flex">
            <img src="asset/IMG/pet.jpeg" alt="image of box illustration">
            <h1 class="m-desktop-title">Shop Pet</h1>
            <h1 class="m-mobile-title">Shop Pet</h1>
        </div>
            <div class="cards" id="pet">
                <?php foreach ($pet as $value): ?>
                <?php
                    if ($value['pet_canRide']){
                        $canRide = '<i class="fa-solid fa-check"></i>';
                    } else {
                        $canRide = '<i class="fa-solid fa-x"></i>';
                    }
                    if ($value['pet_canFly']){
                        $canFly = '<i class="fa-solid fa-check"></i>';
                    } else {
                        $canFly = '<i class="fa-solid fa-x"></i>';
                    }
                    
                    ?>
                <div class="card">
                <img src="asset/img-pets/<?= $value['pet_img']?>" alt="">
                <div class="card-content">
                    <h2><?= $value['pet_namePet']?></h2>
                    <p><span>Skin:&nbsp;</span><span><?= $value['pet_skinAmount']?></span></p>
                    <p><span>Thú cưỡi:&nbsp;</span><span><?= $canRide?></i></span></p>
                    <p><span>Có thể bay:&nbsp;</span><span><?= $canFly?></span></p>
                    <br>
                    <p><strong><span>Giá bán:&nbsp;</span><span><?= $value['pet_price']?></span><span>&nbsp;xu</span></strong></p>
                </div>
                <form action="" method="POST">
                <button name="<?= $value['pet_namePet']?>" class="buy-button btn btn-dark" type="button">Mua</button>
                </form>
                
            </div>
            <?php endforeach ?>
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