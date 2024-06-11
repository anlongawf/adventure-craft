
function showRank(i) {
  let overlay = document.getElementById(`${i}-overlay`);
  console.log(overlay);
  let rankInfo = document.getElementById(`${i}-rankInfo`);
  overlay.style.display = 'block';
  rankInfo.style.display = 'block'; // Hiển thị rankInfo
}

function hideRank(i) {
  let overlay = document.getElementById(`${i}-overlay`);
  let rankInfo = document.getElementById(`${i}-rankInfo`);
  overlay.style.display = 'none';
  rankInfo.style.display = 'none';
}
document.addEventListener('DOMContentLoaded', function () {
  var rank = document.getElementById('rank');
  for (let i = 0; i < shop.rank.length; i++) {
    var card = document.createElement('div');
    card.className = 'card';
    var cacQuyenLoi = '';
    for (let j = 0; j < shop.rank[i].quyenLoi.length; j++) {
      cacQuyenLoi +=
        '<li><p class="desc">' + shop.rank[i].quyenLoi[j] + '</p></li>';
    }

    cardHTML = `
    <img src="${shop.rank[i].imgRank}" alt="Copper VIP Illustration">
    <div class="card-content">
        <h2>${shop.rank[i].nameRank}</h2>
        <p>Thời gian: ${shop.rank[i].thoiGian} ngày</p>
        <h3>Quyền lợi:</h3>
        <ul class="pms">
            <li>
                <p class="desc">Hiển thị icon rank <i class="fa-solid fa-check"></i></p>
            </li>
            <li>
                <p class="desc">Sử dụng /craft <i class="fa-solid fa-check"></i></p>
            </li>
            <li>
                <p class="desc">Mua được hiệu ứng /pe <i class="fa-solid fa-x"></i></p>
            </li>
            <li>
                <p class="desc">Sỡ hữu được pet nepet <i class="fa-solid fa-check"></i></p>
            </li>
        </ul>

    </div>
    <button class="btn btn-dark" type="button">${shop.rank[i].price} Xu</button>
        `;

    card.innerHTML = cardHTML;
    rank.appendChild(card);
    // hideRank(`${shop.rank[i].group}`);
  }

  var pet = document.getElementById('pet');

  for (let i = 0; i < shop.pet.length; i++) {
    var card = document.createElement('div');
    card.className = 'card';

    var Fly = shop.pet[i].canFly
      ? '<i class="fa-solid fa-check"></i>'
      : '<i class="fa-solid fa-x"></i>';
    var Ride = shop.pet[i].canRide
      ? '<i class="fa-solid fa-check"></i>'
      : '<i class="fa-solid fa-x"></i>';
    var cardHTML = `
          <img src="${shop.pet[i].srcImage}" alt="">
          <div class="card-content">
              <h2>${shop.pet[i].namePet}</h2>
              <p><span>Skin:&nbsp</span><span>${shop.pet[i].skinAmount}</span></p>
              <p><span>Thú cưỡi:&nbsp</span><span>${Ride}</span></p>
              <p><span>Có thể bay:&nbsp</span><span>${Fly}</span></p>
              <br>
              <p><strong><span>Giá bán:&nbsp</span><span>${shop.pet[i].price}</span><span>&nbspxu</span></strong></p>
          </div>
          <button class="buy-button btn btn-dark" type="button" onclick="buyPet('${shop.pet[i].realName}')">Mua</button>
      `;

    card.innerHTML = cardHTML;
    pet.appendChild(card);
  }
});
function sendData(url, method, data, callback) {
  var xhr = new XMLHttpRequest();
  xhr.open(method, url, true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        callback(null, xhr.responseText); // Không có lỗi, trả về kết quả
      } else {
        callback(xhr.status); // Trả về mã lỗi nếu có lỗi xảy ra
      }
    }
  };
  xhr.send(data);
}

// Khởi tạo một biến để lưu kết quả

// Sử dụng hàm sendData
// sendData('backend/PHP/check-point.php', 'POST', 'data_here', function(error, response) {
//     if (error) {
//         console.error('Đã xảy ra lỗi:', error);
//     } else {
//         console.log('Kết quả:', response);
//     }
// });
// Bây giờ, bạn có thể sử dụng giá trị của responseData ở đây sau khi request hoàn thành
function buyRank(item) {
  var viTri = 0;
  for (let i = 0; i < shop.rank.length; i++) {
    if (shop.rank[i].group === item) {
      viTri = i;
      break;
    }
  }
  sendData(
    'backend/PHP/check-point.php',
    'POST',
    'data_here',
    function (error, response) {
      if (error) {
        console.error('Đã xảy ra lỗi:', error);
      } else {
        priceRank = shop.rank[viTri].price;
        if (response >= priceRank) {
          check = confirm('Bạn có chắc chắn muốn mua rank ' + item + ' không?');
          if (check) {
            console.log('check');
            sendData(
              'backend/PHP/shop.php',
              'POST',
              'buyRank=true&rank=' + item + '&price=' + priceRank,
              function (error, res) {
                if (error) {
                  console.error('Đã xảy ra lỗi:', error);
                } else {
                  console.log(res);
                }
              }
            );
          } else {
            console.log('noo');
          }
        } else {
          alert('Không đủ số point');
        }
      }
    }
  );
}
function buyPet(item) {
  sendData(
    'backend/PHP/check-point.php',
    'POST',
    'data_here',
    function (error, response) {
      if (error) {
        console.error('Đã xảy ra lỗi:', error);
      } else {
        pricePet = shop.pet[item].price;
        if (response >= pricePet) {
          check = confirm('Bạn có chắc chắn muốn mua pet', item, 'không?');
          if (check) {
            sendData(
              'backend/PHP/shop.php',
              'POST',
              'buyPet=true&pet=' + item + '&price=' + pricePet,
              function (error, response) {
                if (error) {
                  console.error('Đã xảy ra lỗi:', error);
                } else {
                  console.log(response);
                }
              }
            );
          }
        } else {
          alert('Không đủ points');
        }
      }
    }
  );
}
