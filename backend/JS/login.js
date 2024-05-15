function sendHttpRequest(url, method, data, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        callback(xhr.responseText);
      }
    };
    xhr.send(data);
  }
function valForm(){
    var allowedNicknameCharacters = /^[a-zA-Z0-9_]*$/;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var usernameError = document.getElementById("username-error");
    var passwordError = document.getElementById("password-error");
    var output = document.getElementById("output");
    var error =0;
    if (username == "" ){
        usernameError.innerText = "Bạn phải nhập tài khoản";
        error = 1;
    }
    if (password == ""){
        passwordError.innerText = "Bạn phải nhập mật khẩu";
        error =1;
    }

    if (error ==1){
        return false
    } else {
        sendHttpRequest("backend/PHP/login.php","POST",`username=${username}&password=${password}`,function (response){
            if (response === "0"){
                window.location.href = "index.php";
            } else if (response === "1"){
                output.innerText = "Sai tài khoản hoặc mật khẩu";
            } else if (response === 2){
                output.innerText = "Tài khoản không tồn tại";
            } else {
                output.innerText = "Tài khoản hoặc mật khẩu không xác định";
            }
        })
        return false
    }


}