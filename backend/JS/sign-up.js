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
function valFormSignUp(){
    var allowedNicknameCharacters = /^[a-zA-Z0-9_]*$/;
    var passwordRegex = /^[!-~]*$/;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var usernameError = document.getElementById("usernameError");
    var passwordError = document.getElementById("passwordError");
    var rePassword = document.getElementById("rePassword").value;
    var rePasswordError = document.getElementById("rePasswordError");
    var output = document.getElementById("output");
    var error =0;
    if (username === ""){
        usernameError.innerText = "Bạn phải nhập tài khoản";
        error =1;
    } else {
        if (!allowedNicknameCharacters.test(username)){
            usernameError.innerText = "Tên tài khoản không hợp lệ";
            error =1;
        } else if (username.length <2){
            usernameError.innerText = "Tên tài khoản quá ngắn";
            error =1;
        } else if (username.length >17){
            usernameError.innerText = "Tên tài khoản quá dài";
            error =1;
        }
    }
    if (rePassword === ""){
        rePasswordError.innerText = "Bạn phải nhập lại mật khẩu";
        error =1;
    } else {
        if (rePassword !== password){
            rePasswordError = "Mật khẩu không trùng khớp";
            error =1;
        }
    }
    if (password === ""){
        passwordError.innerText = "Bạn phải nhập mật khẩu";
        error =1;
    } else {
        if (password.includes(" ")){
            passwordError.innerText = "Mật khẩu không được chứa dấu cách";
            error =1;
        } else if (!passwordRegex.test(password)){
            passwordError.innerText = "Mật khẩu không hợp lệ";
            error =1;
        } else if (password.length < 4){
            passwordError.innerText = "Mật khẩu quá ngắn";
            error =1;
        } else if (password.length >31){
            passwordError.innerText = "Mật khẩu quá dài";
            error =1;
        } 
    }

    if (error ===1){
        return false;
    } else {
        data = `username=${username}&password=${password}`
        sendHttpRequest("backend/PHP/sign-up.js","POST",data, function(response){
            if (response === "Success"){
                window.location.href = "index.php";
            } else {
                document.getElementById("output").innerText = "Tài khoản đã tồn tại";
            }
        })
        return false;
    }
    

}