<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../asset/fonts/fontawesome-free-6.5.2-web/css/all.css">
  <link rel="stylesheet" href="napthe.css">
  <title>Adventure Craft - Nạp thẻ!</title>
  <link rel="shortcut icon" href="../asset/IMG/logo.jpeg" type="image/x-icon" />
  <script src="script.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
        checkLogin();
        checkPoint("point");
    });
    </script>
</head>
<body onload="QRCode()">
  
<!--=== NAV ===-->
            <!--=== Navbar for mobile ===-->
  <div class="menu-row">
  <span class="open-menu"><i class="fa-solid fa-bars"></i>Menu</span>
  <span class="close-menu">Đóng</span>
  <ul>
    <li>
      <a href="../index.php">Trang chủ</a>
    </li>
    <li><p class="name"></p></li>
    <li> <span class="point"></span><i class="fa-solid fa-money-bill"></i></li>

    <li><a href="../shop.php">Shop</a></li>
    <li><a href="../login.php" class="log-in">Đăng nhập</a></li>
    <li><a href="../sign-up.php" class="register">Đăng ký</a></li>
    <li><a href="../logout.php" class="log-out">Đăng xuất</a></li>
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



    <!--=== Header ===-->

    
<nav class="nav">
          <div class="brand">
            <a href="../index.php"> <img src="../asset/IMG/logo.jpeg" alt=""></a>   
          </div>
        

        <!-- <div class="nav-list flex">
            <a class="nav-item-1" href="#!"><span>Home</span></a> 
            <a class="nav-item-2" href="#!"><span>Shop</span></a>
            <a class="nav-item-4" href="#!"><span>Discord</span></a> 
        </div> -->

       <div class="nav-bar">
            <div class="navbars-title flex">
                <div class="name-user">
                    <P class="name"></P>
                    <span class="point"></span><i class="fa-solid fa-money-bill"></i>
                </div>
                
            </div>
           
            
            <div class="navbars-title-right">
                <a href="../login.php" class="log-in"> Đăng nhập <i class="fa-solid fa-right-to-bracket"></i></a>
                <a class="register" href="../sign-up.php">Đăng kí</a>
                <a href="../logout.php" class="log-out">Đăng xuất <i class="fa-solid fa-right-from-bracket"></i></a>
                
            </div>
            
        </div>

       </div>
    </nav>
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
        <button type="submit" name="submit" class="submit-button">Nạp ngay</button>
    </form>
</div>

    <!-- Nạp thẻ qua ngân hàng -->
    <div>
  <div class="bank">
  <h2>Nạp qua ngân hàng</h2>
  <table>
    <tr>
      <td colspan="2"> <!-- Sử dụng colspan để trải rộng qua cả cột -->
        <div class="qrCode" style="height: 200px;"></div>
      </td>
    </tr>
    <tr>
      <td>Số tài khoản:</td>
      <td><span id="stk"></span></td>
    </tr>
    <tr>
      <td>Ngân hàng:</td>
      <td><span id="bank"></span></td>
    </tr>
    <tr>
      <td>Nội dung chuyển khoản:</td>
      <td><span id="user" class="username"></span></td>
    </tr>
  </table>
  </div>
</div>
    </div>
  </div>
  </div>
</body>
</html>