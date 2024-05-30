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
  function QRCode() {
    sendData("../backend/PHP/check-username.php","POST","check=username",function(err,res){
        api = `https://img.vietqr.io/image/MB-0903982264-qr_only.png?addInfo=${res}`;
        document.getElementById("name").innerText = res;
        document.getElementById("qrCode").innerHTML = `<img src="${api}" alt="QRCode nạp thẻ">`
    })
  }
  