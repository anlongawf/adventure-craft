function checkLogin() {
  
    fetch('backend/PHP/check-login.php')
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