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
    var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var passwordRegex = /^[!-~]*$/;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var usernameError = document.getElementById("usernameError");
    var passwordError = document.getElementById("passwordError");
    var emailError = document.getElementById("emailError");
    var rePassword = document.getElementById("rePassword").value;
    var rePasswordError = document.getElementById("rePasswordError");
    var output = document.getElementById("output");
    var error =0;
    if (!emailRegex.test(email)){
        emailError.innerText = "Email không hợp lệ";
        error++;
    } else {
        emailError.innerText = "";
    }
    if (username === ""){
        usernameError.innerText = "Bạn phải nhập tài khoản";
        error ++;
    } else if (username !== ""){
        if (!allowedNicknameCharacters.test(username)){
            usernameError.innerText = "Tên tài khoản không hợp lệ";
            error++;
        } else if (username.length <2){
            usernameError.innerText = "Tên tài khoản quá ngắn";
            error++;
        } else if (username.length >17){
            usernameError.innerText = "Tên tài khoản quá dài";
            error++;
        } else {
            usernameError.innerText = "";
        }
    } else {
        usernameError.innerText = "";
    }
    if (rePassword === ""){
        rePasswordError.innerText = "Bạn phải nhập lại mật khẩu";
        error++;
    } else if (rePassword !== ""){
        if (rePassword !== password){
            rePasswordError.innerText = "Mật khẩu không trùng khớp";
            error++;
        } else {
            rePasswordError.innerText = "";
        }
    } else {
        rePasswordError.innerText = "";
    }

    if (password === ""){
        passwordError.innerText = "Bạn phải nhập mật khẩu";
        error++;
    } else if (password !== ""){
        if (password.includes(" ")){
            passwordError.innerText = "Mật khẩu không được chứa dấu cách";
            error++;
        } else if (!passwordRegex.test(password)){
            passwordError.innerText = "Mật khẩu không hợp lệ";
            error++;
        } else if (password.length < 4){
            passwordError.innerText = "Mật khẩu quá ngắn";
            error++;
        } else if (password.length >31){
            passwordError.innerText = "Mật khẩu quá dài";
            error++;
        } else {
            passwordError.innerText = "";
        }
    } else {
        passwordError.innerText = "";
    }

    if (error !== 0){
        return false;
    } else {
        data = `username=${username}&password=${password}&email=${email}`
        sendHttpRequest("backend/PHP/sign-up.php","POST",data, function(response){
            if (response === "Success"){
                window.location.href = "index.php";
            } else {
                document.getElementById("output").innerText = "Tài khoản đã tồn tại";
            }
        })
        return false;
    }
    

}