<?php
  session_start();
//   function sql($command){
//     $connection = new PDO("mysql:host=localhost;dbname=playerpoints","root","Sqrtfl0@t01");
//     $data = $connection->query($command)->fetch();
//     return $data;
//     // "SELECT points FROM playerpoints_points INNER JOIN playerpoints_username_cache ON playerpoints_points.uuid = playerpoints_username_cache.uuid WHERE playerpoints_username_cache.username = '".$_SESSION["taiKhoan"]."'"
// }
//   if (isset($_SESSION["taiKhoan"])){
//     $name = "".$_SESSION['taiKhoan']."";
//     $status = '<button id="logout"><a style="text-decoration: none; color: black" href="logout.php">Đăng xuất</a></button>';
//   } else {
//     $name = "user";
//     $status = '<button id="logout"><a style="text-decoration: none; color: black" href="login.php">Đăng nhập</a></button>';
//   }
//   // Lấy ra số point của người chơi
//   $command = sql("SELECT points FROM playerpoints_points INNER JOIN playerpoints_username_cache ON playerpoints_points.uuid = playerpoints_username_cache.uuid WHERE playerpoints_username_cache.username = '".$name."'");
//   if ($command === false){
//     $point = 0;
//   } else {
//     $point = $command["points"];
//   }
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <!--=== Default Tags ===-->
    <meta charset="UTF-8" />
    <title>Adventure Craft - Máy chủ sinh tồn tại Việt Nam!</title>
    <link rel="shortcut icon" href="asset/IMG/logo.jpeg" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="script.js"></script>

    <!--=== StyleSheet ===-->
    <link rel="stylesheet" href="asset/CSS/default.css" />
    <link rel="stylesheet" href="asset/CSS/index.css" />
    <link rel="stylesheet" href="asset/CSS/nav.css">
    <link rel="stylesheet" href="CSS/Components/animations.css" />
    <link rel="stylesheet" href="asset/CSS/nav-mobile.css">
    <link rel="stylesheet" href="asset/fonts/fontawesome-free-6.5.2-web/css/all.css" />
    <script src="backend/JS/check-point.js"></script>
    <script src="backend/JS/check-login.js"></script>
    <script src="backend/JS/check-username.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        checkLogin();
        checkPoint("point");
        checkUsername("name");
    });
    </script>


    <!--=== SEO tags ===-->
    <!--=== Social Profile ===-->

    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="2000" />
    <meta property="og:image:height" content="1000" />
    <meta name="theme-color" content="#5865f2" />
</head>

<body>
    <!--=== NAV ===-->
    <div class="menu-row">
        <span class="open-menu"><i class="fa-solid fa-bars"></i>Menu</span>
        <ul>
            <li><a href="nap-the/">Nạp thẻ</a></li>
            <li><a href="shop.php/">Shop</a></li>
            <li><a href="login.php" class="log-in">Đăng nhập</a></li>
            <li><a href="sign-up.php" class="register">Đăng ký</a></li>
            <li><a href="logout.php" class="log-out">Đăng xuất</a></li>
        </ul>
    </div>
    <nav class="nav">


        <!-- <div class="nav-list flex">
            <a class="nav-item-1" href="#!"><span>Home</span></a> 
            <a class="nav-item-2" href="#!"><span>Shop</span></a>
            <a class="nav-item-4" href="#!"><span>Discord</span></a> 
        </div> -->

        <div class="nav-bar">
            <div class="navbars-title flex">
                <div class="name-user">

                    <P class="name"></P>
                    <span class="point"></span>
                    <i class="fa-solid fa-money-bill"></i>
                </div>

                <a href="nap-the/" class="donate">Nạp thẻ <i class="fa-solid fa-circle-dollar-to-slot"></i></a>
            </div>


            <div class="navbars-title-right">
                <a href="login.php" class="log-in"> Đăng nhập <i class="fa-solid fa-right-to-bracket"></i></a>
                <a class="register" href="sign-up.php">Đăng kí</a>
                <a href="logout.php" class="log-out">Đăng xuất <i class="fa-solid fa-right-from-bracket"></i></a>

            </div>

        </div>

        </div>
    </nav>

    <!--=== Navbar for mobile ===-->
    <script>
    // JavaScript để ẩn menu-content khi trang được tải lần đầu
    document.addEventListener('DOMContentLoaded', function() {
        var menuContent = document.getElementById('menuContent');
        menuContent.style.display = 'none';
    });

    function toggleMenu() {
        var menuContent = document.getElementById('menuContent');
        if (menuContent.style.display === 'block') {
            menuContent.style.display = 'none';
        } else {
            menuContent.style.display = 'block';
        }
    }

    function closeMenu() {
        var menuContent = document.getElementById('menuContent');
        menuContent.style.display = 'none';
    }
    </script>

    <!--=== Header ===-->
    <header class="header">
        <div class="header-title">
            <!--=== Navbar for mobile ===-->


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

        </div>
        <h1>Adventure Craft</h1>
        <span>Máy chủ sinh tồn Minecraft đáng chơi ở Việt Nam.</span>
        </div>
        <p id="getIP">play-adventurecraft.online:25565</p>
        <!-- <div class="showline" onclick="copyContent()">
        <p>Tham Gia Ngay!</p>
        <img src="/Images/copy-solid.svg" alt="copy" class="getIP" />
      </div> -->
        <div class="header-buttons flex">
            <div class="btn btn-image-primary flex" id="minescord-github">
                <i class="fa-solid fa-cart-shopping"></i>
                <a class="n-decoration" href="shop.php">Shop!</a>
            </div>

            <div class="btn btn-image-secondary flex" id="minescord-wiki" onclick="copyContent()">
                <i class="fa-solid fa-gamepad"></i>
                <a class="n-decoration" href="#!" class="getIP">Play now!</a>
            </div>
        </div>

    </header>

    <!--=== Page Break ===-->
    <hr />

    <!--=== Features ===-->
    <section class="features">
        <div class="feature-content page-width flex fc-1">
            <div class="feature-img">
                <img src="asset/IMG/background.png" alt="Discord and Minecraft image and banner" />
            </div>

            <div class="feature-text">
                <h1 class="panton">Game Play!</h1>
                <p>
                    Lối chơi hấp dẫn, đa dạng và phù hợp với tất cả cho những bạn thích
                    chơi sinh tồn, xây nhà, PVP! Ngoài ra các bạn có thể chọn các nghề
                    cho nhân vật của mình, mỗi nghề sẽ có một thuộc tính, vũ khí khác
                    nhau!
                </p>
            </div>
        </div>

        <div class="feature-content feature-content-reverse page-width flex fc-2">
            <div class="feature-img">
                <img src="asset/IMG/card-8.png" alt="Discord and Minecraft image and banner" />
            </div>

            <div class="feature-text feature-text-reverse">
                <h1 class="panton">Friendly Community!</h1>
                <p>
                    Chúng mình không đặt nặng số lượng người chơi có nhiều hay không,
                    chúng mình đặt vào chất lượng của cộng đồng! Khi tham gia cộng đồng
                    các bạn cần tuân thủ theo luật để chúng ta có thể cùng nhau tạo ra
                    một cộng đồng văn minh!
                </p>
            </div>
        </div>

        <div class="feature-content page-width flex fc-3">
            <div class="feature-img">
                <img src="asset/IMG/card-9.png" alt="Discord and Minecraft image and banner" />
            </div>

            <div class="feature-text">
                <h1 class="panton">Updated!</h1>
                <p>...</p>
            </div>
        </div>
    </section>

    <!--=== Page Break ===-->

    <!--=== Github Section ===-->
    <section class="github">
        <div class="github-box">
            <h1 class="panton">
                Tham gia Discord <span class="panton">Adventure!</span>
            </h1>
            <!-- <p>
          Các bạn cần phải liên kết tài khoản Minecraft với Discord để có thể
          chơi được. -->
            </p>
            <a class="btn btn-success" href="">Discord <i class="fa-brands fa-discord"></i></a>
        </div>
    </section>

    <!--=== Page Break ===-->
    <hr />

    <!--=== Page Break ===-->
    <hr />

    <!--=== Page Footer ===-->
    <footer class="footer">
        <p>© AdventureCraft 2024.</p>
    </footer>

    <!-- <script src="JS/index.js"></script> -->

    <!-- click event -->
    <script>
    let text = document.getElementById('getIP').innerHTML;
    const copyContent = async () => {
        try {
            await navigator.clipboard.writeText(text);
            console.log('Content copied to clipboard');
            alert('Bạn đã copy IP thành công.');
        } catch (err) {
            console.error('Failed to copy: ', err);
        }
    };
    </script>
</body>

</html>