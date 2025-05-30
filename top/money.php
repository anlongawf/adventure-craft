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


    <title>Bảng xếp hạng money</title>
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
                <!-- <li>
                    <a href="kill.php"><i class="fa-solid fa-trophy"></i> Bảng xếp hạng Kills</a>
                </li>
                <li>
                    <a href="die.php"><i class="fa-solid fa-medal"></i> Bảng xếp hạng Deads</a>
                </li> -->
                <li>
                    <a href="point.php"><i class="fa-solid fa-certificate"></i> Bảng xếp hạng money</a>
                </li>
                <li>
                    <a href="money.php"><i class="fa-solid fa-certificate"></i> Bảng xếp hạng Money</a>
                </li>
                <li>
                    <a href="level.php"><i class="fa-solid fa-certificate"></i> Bảng xếp hạng cấp độ</a>
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
                    <a href="../nap-the/"><i class="fa-solid fa-circle-dollar-to-slot"></i> Nạp thẻ </a>
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
        <h1>Bảng xếp hạng Money (bạc)</h1>

        <table>
            <thead>
                <tr>
                    <th>Số thứ tự</th>
                    <th>Người chơi</th>
                    <th>Money</th>
                    <th>Top</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once "../backend/PHP/function.php";
                    $result = sqlCommand("dptadven_coinsengine","SELECT ce.*, @ranking := @ranking + 1 AS ranking FROM coinsengine_users ce JOIN (SELECT DISTINCT money FROM coinsengine_users ORDER BY money DESC LIMIT 50) AS top_money ON ce.money = top_money.money JOIN (SELECT @ranking := 0) r ORDER BY ce.money DESC")->fetchAll();
                ?>
                <?php foreach ($result as $value) :?>
                <tr>
                    <td><?= $value["ranking"]?></td>
                    <td><?= $value['name']?></td>
                    <td><?= $value['money']?></td>
                    <td><?php
                            $output = sqlCommand("dptadven_coinsengine","SELECT DISTINCT money FROM coinsengine_users ORDER BY money DESC LIMIT 50")->fetchAll();
                            $listMoney = [];
                            foreach ($output as $item){
                                $listMoney[] = $item["money"];
                            }
                            $top = 1;
                            $rank;
                            foreach ($listMoney as $rows){
                                if ($rows === $value["money"]){
                                    $rank = $top;
                                    echo "<span class='top-$rank'>$top</span>";
                                } else {
                                    $top++;
                                }
                                
                            }

                            
                        ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>