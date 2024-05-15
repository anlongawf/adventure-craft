function checkUsername() {
  
    fetch('backend/PHP/check-username.php')
    .then(response => response.text())
    .then(result => {
    return result;

    })
    .catch(error => {
    console.error('Lỗi:', error);
    });
  }
function QRCode(){
    stk = "0838411897";
    nganHang = "MBBank";
    document.getElementById("bank").innerText = nganHang;
    document.getElementById("stk").innerText = stk;
    qrCode = document.getElementsByClassName("qrCode")[0];
    user = checkUsername();
    document.getElementById("user").innerText = user;
    api = `https://img.vietqr.io/image/MB-${stk}-qr_only.png?addInfo=${user}`;
    qrCode.innerHTML = `<img src="${api}">`;
}