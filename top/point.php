<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/CSS/nav.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Thêm thư viện jQuery -->
    <link rel="shortcut icon" href="../asset/IMG/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="../asset/fonts/fontawesome-free-6.5.2-web/css/all.css" />
    <script src="../asset/JS/nav.js"></script>
    <link rel="stylesheet" href="style.css">


    <title>Document</title>
</head>

<body>
    <!--=== NAV ===-->

    <script src="asset/JS/nav.js"></script>
    <nav class="nav">
        <div class="lef">
            <i class="fa-solid fa-bars menu" style="color:white">Menu</i>
            <ul class="nav-left">
                <li>
                    <a href="../index.php"><i class="fa-solid fa-house"></i> Trang chủ </a>
                </li>
                <li>
                    <a href="../shop.php"><i class="fa-solid fa-shop"></i> Cửa hàng</a>
                </li>
                <li>
                    <a href="../nap-the/"><i class="fa-solid fa-circle-dollar-to-slot"></i>Nạp thẻ</a>
                </li>
                <li>
                    <a href="#" class="top-ingame"><i class="fa-solid fa-chart-simple"></i>Bảng xếp hạng </a>
                </li>
            </ul>
            <ul class="sub-menu">
                </li>
                <li>
                    <a href="../top/point.php"><i class="fa-solid fa-certificate"></i> Bảng xếp hạng Xu</a>
                </li>
                <li>
                    <a href="../top/money.php"><i class="fa-solid fa-certificate"></i> Bảng xếp hạng Money</a>
                </li>
                <li>
                    <a href="../top/level.php"><i class="fa-solid fa-certificate"></i> Bảng xếp hạng cấp độ</a>
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
            <img src="../asset/IMG/avatar.png" alt="" class="avatar">
            <ul class="nav-right">
                <li>
                    <a href="../profile.php"> <i class="fa-solid fa-user"></i>Thông tin </a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-circle-dollar-to-slot"></i> Nạp thẻ </a>
                </li>
                <li id="changePassword">
                    <a href="../changePassword.php"><i class="fa-solid fa-rotate-right"></i>Đổi mật khẩu </a>
                </li>
                <li id="login">
                    <a href="../login.php"><i class="fa-solid fa-right-from-bracket"></i>Đăng nhập</a>
                </li>
                <li id="sign-up">
                    <a href="../sign-up.php"><i class="fa-solid fa-registered"></i>Đăng ký</a>
                </li>
                <li id="sign-out">
                    <a href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="main">
        <h1>Bảng xếp hạng </h1>
        <table>
            <thead>
                <tr>
                    <th>Số thứ tự</th>
                    <th>Người chơi</th>
                    <th>Xu</th>
                    <th>Top</th>
                </tr>
            </thead>
            <?php
                    require_once "../backend/PHP/function.php";
                    $result = sqlCommand("playerpoints","select DISTINCT ROW_NUMBER() OVER(ORDER BY points DESC) AS ranking, playerpoints_points.points, playerpoints_username_cache.username name from playerpoints_points join playerpoints_username_cache on playerpoints_username_cache.uuid = playerpoints_points.uuid order by points desc limit 4")->fetchAll();
                ?>
            <?php foreach ($result as $value) :?>
            <tr>
                <td><?= $value["ranking"]?></td>
                <td><?= $value['name']?></td>
                <td><?= $value['points']?></td>
                <td>
                    <?php
                            $output = sqlCommand("playerpoints","SELECT DISTINCT points FROM playerpoints_points ORDER BY points DESC LIMIT 4")->fetchAll();
                            $listMoney = [];
                            foreach ($output as $item){
                                $listMoney[] = $item["points"];
                            }
                            $top = 1;
                            $rank;
                            foreach ($listMoney as $rows){
                                if ($rows === $value["points"]){
                                    $rank = $top;
                                    echo "<span class='top-$rank'>$top</span>";
                                } else {
                                    $top++;
                                }
                                
                            }

                            
                        ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>