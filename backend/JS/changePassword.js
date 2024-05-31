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
function changePassword(){
    var passwordRegex = /^[!-~]*$/;
    var oldPassword = document.getElementById("matKhauCu").value;
    var newPassword = document.getElementById("matKhauMoi").value;
    var rePassword = document.getElementById("rePassword").value;
    var oldPasswordError = document.getElementById("matKhauCuError");
    var newPasswordError = document.getElementById("matKhauMoiError");
    var rePasswordError = document.getElementById("rePasswordError");
    var error =0;
    var output= document.getElementById("output");
    if (newPassword === "") {
      newPasswordError.innerText = "Bạn phải nhập mật khẩu mới";
      error++;
    } else {
      if (!passwordRegex.test(newPassword)) {
          newPasswordError.innerText = "Mật khẩu mới không hợp lệ";
          error++;
      } else if (newPassword.length < 5) {
          newPasswordError.innerText = "Mật khẩu mới quá ngắn";
          error++;
      } else if (newPassword.length > 31) {
          newPasswordError.innerText = "Mật khẩu quá dài";
          error++;
      } else {
          newPasswordError.innerText = ""; // Đặt lại thông báo lỗi nếu không có lỗi nào
      }
  }
  if (rePassword === "") {
    rePasswordError.innerText = "Bạn phải nhập lại mật khẩu mới";
    error++;
  } else if (rePassword !== newPassword) {
    rePasswordError.innerText = "Mật khẩu nhập lại không khớp";
    error++;
  } else {
    rePasswordError.innerText = ""; // Đặt lại thông báo lỗi nếu không có lỗi nào
  }
    if (oldPassword === ""){
        oldPasswordError.innerText = "Bạn phải nhập mật khẩu cũ";
        error++;
    } else if (oldPassword !== ""){
      if (oldPassword === newPassword){
        oldPasswordError.innerText = "Mật khẩu mới và mật khẩu cũ không được giống nhau";
        newPasswordError.innerText = "Mật khẩu mới và mật khẩu cũ không được giống nhau";
        error++;
        
      } else {
        oldPasswordError.innerText = "";
        newPasswordError.innerText = "";
        if (error === 0) {
          sendHttpRequest("backend/PHP/checkPassword.php","POST",`password=${oldPassword}`,function(res){
            if (!res){
              output.innerText = "Đổi mật khẩu thất bại";
            } else {
              sendHttpRequest("backend/PHP/changePassword.php","POST",`changePassword=${newPassword}`,function(res){
                if (res){
                  window.location.href = "login.php";
                } else {
                  alert("Lỗi máy chủ");
                }
              })
            }
        })
        }
      }
      
        
    }
    console.log(error);
    return false
}
