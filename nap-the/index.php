<?php
    session_start();
    if(!isset($_SESSION["taiKhoan"])){
        header("Location: ../login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/fonts/fontawesome-free-6.5.2-web/css/all.css">
    <link rel="stylesheet" href="napthe.css">
    <link rel="stylesheet" href="../asset/CSS/nav.css">
    <title>Adventure Craft - Nạp thẻ!</title>
    <link rel="shortcut icon" href="../asset/IMG/logo.jpeg" type="image/x-icon" />
    <script src="qrCode.js"></script>

</head>

<body>

    <!--=== NAV ===-->

    <script src="../asset/JS/nav.js"></script>
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
            QRCode();
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



    <!--=== Header ===-->



    <!-- MAIN -->
    <div class="container">
        <div>
            <!-- Nạp thẻ qua card -->
            <div class="main">
                <div class="card-recharge">
                    <h2>Nạp qua thẻ cào</h2>
                    <form method="POST" class="recharge-form">
                        <table class="recharge-table">
                            <tr>
                                <td>Loại thẻ</td>
                                <td>
                                    <select name="card_type" required class="card-type-select">
                                        <option value="">Chọn loại thẻ</option>
                                        <?php 
                            $cdurl = curl_init("https://thesieutoc.net/card_info.php"); 
                            curl_setopt($cdurl, CURLOPT_FAILONERROR, true); 
                            curl_setopt($cdurl, CURLOPT_FOLLOWLOCATION, true); 
                            curl_setopt($cdurl, CURLOPT_RETURNTRANSFER, true); 
                            curl_setopt($cdurl,CURLOPT_CAINFO, __DIR__ .'/curl-ca-bundle.crt');
                            curl_setopt($cdurl,CURLOPT_CAPATH, __DIR__ .'/curl-ca-bundle.crt');
                            $obj = json_decode(curl_exec($cdurl), true); 
                            curl_close($cdurl);
                            $length = count($obj);
                            for ($i = 0; $i < $length; $i++) {
                                if ($obj[$i]['status'] == 1){
                                    echo '<option value="'.$obj[$i]['name'].'">'.$obj[$i]['name'].' ('.$obj[$i]['chietkhau'].'%)</option> ';
                                }
                            }
                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Mệnh giá:</td>
                                <td>
                                    <select name="card_amount" required class="card-amount-select">
                                        <option value="">Chọn mệnh giá</option>
                                        <option value="10000">10.000</option>
                                        <option value="20000">20.000</option>
                                        <option value="30000">30.000</option>
                                        <option value="50000">50.000</option>
                                        <option value="100000">100.000</option>
                                        <option value="200000">200.000</option>
                                        <option value="300000">300.000</option>
                                        <option value="500000">500.000</option>
                                        <option value="1000000">1.000.000</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Số seri:</td>
                                <td><input type="text" name="serial" required class="serial-input" /></td>
                            </tr>
                            <tr>
                                <td>Mã thẻ:</td>
                                <td><input type="text" name="pin" required class="pin-input" /></td>
                            </tr>
                        </table>
                        <button type="submit" name="btn-card" class="submit-button">Nạp ngay</button>
                    </form>

                    <?php
                        require_once "sendCard.php";
                        if (isset($response)){
                            echo $response;
                        }
                    ?>
                </div>

                <!-- Nạp thẻ qua ngân hàng -->
                <div>
                    <div class="bank">
                        <h2>Nạp qua ngân hàng</h2>
                        <table>
                            <tr>
                                <td colspan="2">
                                    <!-- Sử dụng colspan để trải rộng qua cả cột -->
                                    <div id="qrCode" class="qrCode" style="height: 200px;"></div>

                                </td>
                            </tr>
                            <tr>
                                <td>Số tài khoản:</td>
                                <td><span>0903982264</span></td>
                            </tr>
                            <tr>
                                <td>Ngân hàng:</td>
                                <td><span>MB Bank</span></td>
                            </tr>
                            <tr>
                                <td>Nội dung chuyển khoản:</td>
                                <td><span id="name" class="username"></span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<script>
$(document).ready(function() {
    $('.right').click(function() {
        $('.nav-right').slideToggle();
    });
});
</script>