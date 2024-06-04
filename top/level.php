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
                    <a class="top-ingame"><i class="fa-solid fa-chart-simple"></i>Bảng xếp hạng </a>
                </li>
            </ul>
            <ul class="sub-menu">
                </li>
                <li>
                    <a href="point.php"><i class="fa-solid fa-certificate"></i> Bảng xếp hạng Xu</a>
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
        <h1>Bảng xếp hạng cấp độ</h1>
        <table>
            <thead>
                <tr>
                    <th>Số thứ tự</th>
                    <th>Người chơi</th>
                    <th>Cấp độ</th>
                    <th>Top</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once "../backend/PHP/function.php";
                    $listUUID = sqlCommand("playerpoints","select * from playerpoints_username_cache")->fetchAll();
                    $result = sqlCommand("mmocore","select DISTINCT ROW_NUMBER() OVER(ORDER BY level DESC) AS ranking, uuid, level from  mmocore_playerdata order by level desc limit 50")->fetchAll();
                    $mergedArray = [];

                    
                ?>
                <?php foreach ($result as $value):?>
                    <tr>
                        <td><?= $value['ranking']?></td>
                        <td><?php
                            foreach ($listUUID as $item){
                                if ($item['uuid'] === $value["uuid"]){
                                    echo $item['username'];
                                    break;
                                }
                            }
                        ?></td>
                        <td><?= $value['level']?></td>
                        <td><?php
                            $output = sqlCommand("mmocore","select DISTINCT level from mmocore_playerdata order by level desc limit 50")->fetchAll();
                            $listLevel = [];
                            foreach($output as $item){
                                $listLevel[] = $item['level'];
                            }
                            $top =1;
                            $rank;
                            foreach($listLevel as $rows){
                                if ($rows === $value['level']){
                                    $rank = $top;
                                    echo "<span class='top-$top'>$rank</span>";
                                } else {
                                    $top++;
                                }
                            }
                        
                        ?></td>
                    </tr>    
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</body>

</html>