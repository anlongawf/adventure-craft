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
                if(!($_SESSION['taiKhoan'] === "AnTrc2" || $_SESSION['taiKhoan'] === "Ans")){
                    header("Location: ../");
                }
            } else {
                header("Location: ../");
            }
        }
    }
?>