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
        <h3 class="sub-title">Adventure Craft?</h3>
        <p class="text-content">
          Adventure Craft là một máy chủ sinh tôn tại Việt Nam. Ngoài lối chơi
          sinh tồn cơ bản bạn có thể tham gia chiến đấu theo từng cấp độ của
          quái / boss. Mục tiêu của chúng mình là tạo ra một môi trường mở cho
          phép mọi người chơi theo lối chơi riêng của bản thân mình.
          <br />
          Adventure Craft sẽ cung cấp một trải nghiệm gameplay hấp dẫn, nơi bạn
          có thể hợp sức với người chơi khác để đánh bại những con quái vật mạnh
          mẽ, thu thập vật phẩm quý giá.
          <br />
          Bạn sẽ có thể tham gia các nghề để có thể sử dụng được nhiều kỹ năng
          và khả năng khác nhau.
          <br />
          <br />
          Máy chủ chạy phiên bản (1.8.x -> 1.20.02) hỗ trợ cho PC
          <br />
          Máy chủ chạy phiên bản (1.20.40->1.20.81) hỗ trợ cho PE
        </p>
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
