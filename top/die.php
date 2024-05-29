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
            <i class="fa-solid fa-bars menu">Menu</i>
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
                    <a href="index.php"><i class="fa-solid fa-chart-simple"></i>Bảng xếp hạng</a>
                </li>
            </ul>
        </div>
        <div class="right">
            <span class="username">Đăng nhập</span>
            <img src="../asset/IMG/avatar.png" alt="" class="avatar">
            <ul class="nav-right">
                <li>
                    <a href="../profile.php"> <i class="fa-solid fa-user"></i>Thông tin </a>
                </li>
                <li>
                    <a href="../nap-the/"><i class="fa-solid fa-circle-dollar-to-slot"></i> Nạp thẻ </a>
                </li>
                <li>
                    <a href="../changePassword.php"><i class="fa-solid fa-rotate-right"></i>Đổi mật khẩu </a>
                </li>
                <li>
                    <a href="../login.php"><i class="fa-solid fa-right-from-bracket"></i>Đăng nhập</a>
                </li>
                <li>
                    <a href="../sign-up.php"><i class="fa-solid fa-registered"></i>Đăng ký</a>
                </li>
                <li>
                    <a href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="main">
        <h1>Bảng xếp hạng Deads</h1>
        <table>
            <thead>
                <tr>
                    <th>Bảng xếp hạng</th>
                    <th>Người chơi</th>
                    <th>Cấp độ</th>
                    <th>Deads</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>10</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>8</td>
                    <td>80</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>