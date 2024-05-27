<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="asset/CSS/profile.css" />

    <title>Adventure Craft - Profile</title>
  </head>

  <body>
    <header class="header">
      <ul class="nav">
        <li><a href="#">Trang chủ</a></li>
        <li><a href="#">Wiki</a></li>
        <li><a href="#">Cửa hàng</a></li>
        <li><a href="#">Nạp thẻ</a></li>
      </ul>
    </header>

    <div class="main">
      <div class="profile">
        <div class="av-name">
          <img src="asset/IMG/avatar.png" alt="" class="profile" />
          <h1 class="name">David Phanns</h1>
          <div class="infor">
            <div class="rank-xu">
              <p class="rank">Rank: Kim cương</p>
              <p class="xu">Xu: 1000</p>
            </div>
            <div class="mmcore">
              <p class="class">Nghề: Archer</p>
              <p class="level">Cấp độ: 100</p>
            </div>
          </div>
        </div>
        <iframe
          class="widget"
          src="https://discord.com/widget?id=1182565117825646612&theme=dark"
          width="100"
          height="400"
          allowtransparency="true"
          frameborder="0"
          sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"
        ></iframe>
      </div>

      <div class="product">
        <h2>Pet sỡ hữu:</h2>
        <div class="pet-product">
          <div class="pets">
            <h3 class="name-pets">arcanegolem</h3>
            <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
          </div>
          <div class="pets">
            <h3 class="name-pets">arcanegolem</h3>
            <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
          </div>
          <div class="pets">
            <h3 class="name-pets">arcanegolem</h3>
            <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
          </div>
        </div>
        <div class="pet-product">
          <div class="pets">
            <h3 class="name-pets">arcanegolem</h3>
            <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
          </div>
          <div class="pets">
            <h3 class="name-pets">arcanegolem</h3>
            <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
          </div>
          <div class="pets">
            <h3 class="name-pets">arcanegolem</h3>
            <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
          </div>
        </div>
        <div class="pet-product">
          <div class="pets">
            <h3 class="name-pets">arcanegolem</h3>
            <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
          </div>
          <div class="pets">
            <h3 class="name-pets">arcanegolem</h3>
            <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
          </div>
          <div class="pets">
            <h3 class="name-pets">arcanegolem</h3>
            <img src="asset/img-pets/arcanegolem.png" alt="" class="img-pet" />
          </div>
        </div>
      </div>
    </div>

    <!-- PAGINATION -->
  </body>
</html>

<!-- pagination -->

<!-- header -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.nav');

    menuToggle.addEventListener('click', function () {
      nav.classList.toggle('show');
    });
  });
</script>
