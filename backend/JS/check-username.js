function checkUsername() {
  
    fetch('backend/PHP/check-username.php')
    .then(response => response.text())
    .then(result => {
    username = document.getElementsByClassName(CLASS);
    for (let i of username){
      i.innerText = result;
    }
    })
    .catch(error => {
    console.error('Lỗi:', error);
    });
  }