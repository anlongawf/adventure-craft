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
    <!-- <script src="backend/JS/check-username.js"></script> -->

    <!--=== StyleSheet ===-->
    <link rel="stylesheet" href="asset/CSS/default.css" />
    <link rel="stylesheet" href="asset/CSS/index.css" />
    <link rel="stylesheet" href="asset/CSS/nav.css">
    <link rel="stylesheet" href="CSS/Components/animations.css" />
    <link rel="stylesheet" href="asset/fonts/fontawesome-free-6.5.2-web/css/all.css" />
    <!-- 
    
    
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        checkLogin();
        checkPoint("point");
        checkUsername("name");
    });
    </script> -->
    <script src="backend/JS/check-login.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        checkLogin();
    });
    </script>
    <!-- jquere js for nav -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


    <!--=== SEO tags ===-->
    <!--=== Social Profile ===-->

    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="2000" />
    <meta property="og:image:height" content="1000" />
    <meta name="theme-color" content="#5865f2" />
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
    <header class="header">
        <h1>Adventure Craft</h1>
        <span>Máy chủ sinh tồn Minecraft đáng chơi ở Việt Nam.</span>
        </div>
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
                <i class="fa-solid fa-map"></i>
                <a class="n-decoration" href="wiki/">MAP</a>
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
    <!-- <section class="github">


    </section> -->

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