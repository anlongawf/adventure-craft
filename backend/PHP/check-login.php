<?php
session_start();

// Kiểm tra xem session "taiKhoan" có tồn tại hay không
$login_success = isset($_SESSION['taiKhoan']);

// Trả về kết quả dưới dạng JSON
if ($login_success){
    echo json_encode(['success' => $login_success, 'playername' => $_SESSION["taiKhoan"]]);
} else {
    echo json_encode(['success' => $login_success, 'playername' => 'user']);
}
?>