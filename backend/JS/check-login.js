function checkLogin() {
  
    fetch('backend/PHP/check-login.php')
    .then(response => response.json())
    .then(result => {
    if (result.success) {
        // Đã đăng nhập
        document.getElementById("login").style.display = "none";
        document.getElementById("sign-up").style.display = "none";
        document.getElementById("user").innerText = result.playername;
    } else {
        // Chưa đăng nhập
        document.getElementById("changePassword").style.display = "none";
        document.getElementById("sign-out").style.display = "none";
    }
    })
    .catch(error => {
    console.error('Lỗi:', error);
    });
  }