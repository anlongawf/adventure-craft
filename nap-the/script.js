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
function checkLogin() {
  
  fetch('../backend/PHP/check-login.php')
  .then(response => response.json())
  .then(result => {
  if (result.success) {
      // Đã đăng nhập
      login = document.getElementsByClassName('log-in');
      for (let i of login) {
          i.style.display = 'none';
      }
      register = document.getElementsByClassName('register');
      for (let i of register) {
          i.style.display = 'none';
      }
  } else {
      // Chưa đăng nhập
      logout = document.getElementsByClassName('log-out');
      for (let i of logout) {
          i.style.display = 'none';
      }
  }
  })
  .catch(error => {
  console.error('Lỗi:', error);
  });
}
function checkPoint(CLASS){
  fetch('../backend/PHP/check-point.php')
  .then(response => response.text())
  .then(result => {
  
  point = document.getElementsByClassName(CLASS);
  for (let i of point){
      i.innerText = result;
  }
  })
  .catch(error => {
  console.error('Lỗi:', error);
  });
}
function checkUsername(callback) {
  sendData('../backend/PHP/check-username.php', 'POST', "check=username", function (err, res) {
    if (err) {
      callback(err, null); // Trả về lỗi nếu có
    } else {
      callback(null, res); // Trả về kết quả nếu thành công
    }
  });
}
function QRCode() {
  var stk = "0838411897";
  var nganHang = "MBBank";
  document.getElementById("bank").innerText = nganHang;
  document.getElementById("stk").innerText = stk;
  var qrCode = document.getElementsByClassName("qrCode")[0];
  checkUsername(function (err, user) {
    if (err) {
      console.error("Error fetching username:", err);
      document.getElementById("user").innerText = "Error"; // Hiển thị lỗi nếu có
      return;
    }
    username = document.getElementsByClassName('name');
    for (let i of username){
      i.innerText = user;
    }
    document.getElementById("user").innerText = user;
    var api = `https://img.vietqr.io/image/MB-${stk}-qr_only.png?addInfo=${user}`;
    qrCode.innerHTML = `<img src="${api}">`;
  });
}
