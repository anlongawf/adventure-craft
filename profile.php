<?php
    session_start();
    if(!isset($_SESSION["taiKhoan"])){
        header("Location: login.php");
    }
    require_once "backend/PHP/function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="asset/CSS/nav.css">
    <link rel="stylesheet" href="asset/CSS/profile.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <title>Adventure Craft - Profile</title>
</head>

<body>

    <!--=== NAV ===-->
    <?php require_once "components/navbar.php" ?>

    <!-- <script src="asset/JS/nav.js"></script>
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
    </nav> -->


    <?php
        $user = $_SESSION['taiKhoan'];
        $money = sqlCommand("coinsengine","SELECT money FROM coinsengine_users where name = '$user'")->fetch();
        $point = sqlCommand("playerpoints","SELECT points,playerpoints_points.uuid from playerpoints_points JOIN playerpoints_username_cache ON playerpoints_points.uuid = playerpoints_username_cache.uuid WHERE username = '$user'")->fetch();
        $uuid = $point['uuid'];
        $mmocore = sqlCommand("mmocore","SELECT level, class FROM mmocore_playerdata where uuid = '$uuid'")->fetch();
        $level = $mmocore['level'];
        $class = $mmocore['class'];
    ?>
    <div class="main">
        <div class="profile">
            <div class="av-name">
                <img src="asset/IMG/avatar.png" alt="" class="profile" />
                <h1 class="name"><?= $user?></h1>
                <div class="infor">
                    <div class="rank-xu">
                        <p class="rank">Rank: Kim cương</p>

                    </div>
                    <div class="mmcore">
                        <p class="class">Nghề: <?= $class?> </p>
                        <p class="level">Cấp độ: <?= $level?></p>
                    </div>
                    <div class="eco">
                        <p class="xu">Xu: <?= $point['points']?></p>
                        <p class="money">Bạc: <?= $money['money']?></p>
                    </div>
                </div>
            </div>
            <iframe class="widget" src="https://discord.com/widget?id=1182565117825646612&theme=dark" width="100"
                height="400" allowtransparency="true" frameborder="0"
                sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>

        <div class="product">
            <h2>Pet sỡ hữu:</h2>
            <div class="pet-product">
                <div class="pets">
                    <h3 class="name-pets">arcanegolem</h3>
                    <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
                </div>
                <div class="pets">
                    <h3 class="name-pets">arcanegolem</h3>
                    <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
                </div>
                <div class="pets">
                    <h3 class="name-pets">arcanegolem</h3>
                    <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
                </div>
            </div>
            <div class="pet-product">
                <div class="pets">
                    <h3 class="name-pets">arcanegolem</h3>
                    <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
                </div>
                <div class="pets">
                    <h3 class="name-pets">arcanegolem</h3>
                    <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
                </div>
                <div class="pets">
                    <h3 class="name-pets">arcanegolem</h3>
                    <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
                </div>
            </div>
            <div class="pet-product">
                <div class="pets">
                    <h3 class="name-pets">arcanegolem</h3>
                    <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
                </div>
                <div class="pets">
                    <h3 class="name-pets">arcanegolem</h3>
                    <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
                </div>
                <div class="pets">
                    <h3 class="name-pets">arcanegolem</h3>
                    <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
                </div>
            </div>
        </div>
    </div>

    <!-- PAGINATION -->
</body>

</html>

<!-- pagination -->

<!-- header -->