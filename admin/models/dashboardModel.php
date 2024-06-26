<?php
    require_once "commons/function.php";
    class dashboardModel{
        public $conn;
        function __construct()
        {
            $this->conn = connectDatabase();
        }
        function checkLogin(){
            if(isset($_SESSION['taiKhoan'])){
                if (!($_SESSION['taiKhoan'] === "AnTrc2" || $_SESSION['taiKhoan'] === "Ans" || $_SESSION['taiKhoan'] === "Khoai456" || $_SESSION['taiKhoan'] === "Kayyaa705" || $_SESSION['taiKhoan'] === "Khoa1117" || $_SESSION['taiKhoan'] === "tomeme" || $_SESSION['taiKhoan'] === "Ryrem15" || $_SESSION['taiKhoan'] === "Mike" || $_SESSION['taiKhoan'] === "khanhbui" || $_SESSION['taiKhoan'] === "Hynbel" || $_SESSION['taiKhoan'] === "EmHiuuu")){
                    header("Location: ../");
                }
            } else {
                header("Location: ../");
            }
        }
    }
?>