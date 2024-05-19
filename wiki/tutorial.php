<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="asset/fonts/fontawesome-free-6.5.2-web/css/all.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Wiki</title>
  </head>
  <body>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const openMenu = document.querySelector('.open-menu');
        const closeMenu = document.querySelector('.close-menu');
        const menuList = document.querySelector('.nav-bar ul');

        // Mở menu khi click vào "Menu"
        openMenu.addEventListener('click', function () {
          menuList.style.display = 'block';
          openMenu.style.display = 'none';
          closeMenu.style.display = 'inline'; // Hiển thị chữ "Đóng"
        });

        // Đóng menu khi click vào "Đóng"
        closeMenu.addEventListener('click', function () {
          menuList.style.display = 'none';
          openMenu.style.display = 'inline'; // Hiển thị lại chữ "Menu"
          closeMenu.style.display = 'none'; // Ẩn chữ "Đóng" đi
        });
      });
    </script>

    <div class="nav-bar">
      <div class="menu"><img src="bars-menu.png" alt="" /></div>
      <a href="">
        <h1 class="logo">Adventure Craft</h1>
      </a>
      <ul>
        <li>
          <a href="introduction.html">Giới thiệu</a>
        </li>
        <li>
          <a href="howplay.html">Cách tham gia</a>
        </li>
        <li>
          <a href="tutorial.html">Cẩm nang</a>
        </li>
        <li>
          <a href="donate.html">Ủng hộ (Donate)</a>
        </li>
        <li>
          <a href="communicate.html">Cộng đồng</a>
        </li>
      </ul>
    </div>
    <!-- content -->
    <div class="container">
      <div class="content">
        <h2 class="title">Chào mừng bạn đến Wiki Adventure Craft</h2>
        <h3 class="sub-title">Các lệnh cơ bản:</h3>
        <p class="text-content">
          /class để có thể chọn nghề<br />
          /shop để mua vật phẩm<br />
          /sellgui để bán vật phẩm<br />
          /afk - Đặt trạng thái người chơi là "Away From Keyboard" (AFK).<br />
          /back - Dịch chuyển người chơi về vị trí trước đó (thường là vị trí
          khi chết hoặc khi dịch chuyển trước đó).<br />
          /delhome [name] - Xóa một điểm về nhà đã đặt.<br />
          /home [name] - Dịch chuyển đến điểm về nhà đã đặt.<br />
          /pay &lt;player&gt; &lt;amount&gt; - Chuyển tiền cho một người chơi
          khác.<br />
          /sethome [name] - Đặt một điểm về nhà.<br />
          /spawn - Dịch chuyển đến điểm xuất hiện của máy chủ.<br />
          /tpa &lt;player&gt; - Yêu cầu dịch chuyển đến một người chơi.<br />
          /tpaccept - Chấp nhận yêu cầu dịch chuyển.<br />
          /tpdeny - Từ chối yêu cầu dịch chuyển.<br />
          /warp &lt;warpname&gt; - Dịch chuyển đến một điểm warp đã đặt.<br />
          /claim để có vùng đất riêng của mình, cần xẻng vàng.<br />
          Video hướng dẫn:
          <a
            href="https://www.facebook.com/anphanhunter/videos/375466911621773?idorvanity=868891888365976"
            style="color: rgb(72, 86, 176)"
            >https://www.facebook.com/anphanhunter/videos/375466911621773?idorvanity=868891888365976</a
          >
        </p>
        <p></p>
      </div>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        if (window.innerWidth <= 768) {
          const menuImage = document.querySelector('.menu img');
          const menuList = document.querySelector('.nav-bar ul');

          // Hiển thị hoặc ẩn menu khi click vào hình ảnh
          menuImage.addEventListener('click', function () {
            // Nếu menu đã được hiển thị, ẩn nó. Ngược lại, hiển thị nó.
            if (menuList.style.display === 'block') {
              menuList.style.display = 'none';
            } else {
              menuList.style.display = 'block';
            }
          });

          // Ẩn menu khi click vào menu
          menuList.addEventListener('click', function () {
            menuList.style.display = 'none';
          });
        }
      });
    </script>
  </body>
</html>
