<?php
    require_once "models/whitelistModel.php";
    class whitelistController{
        public $whitelist;
        function __construct()
        {
            $this->whitelist = new whitelistModel();
        }
        function whitelist(){
            if (!isset($_SESSION['taiKhoan'])){
                header("Location: ../");
            } else {
                // tên ingame các mod
                // Nếu không phải là các mod thì điều hướng về dashboard
                if (!($_SESSION['taiKhoan'] === "AnTrc2" || $_SESSION['taiKhoan'] === "Ans" || $_SESSION['taiKhoan'] === "Khoai456" || $_SESSION['taiKhoan'] === "Kayyaa705" || $_SESSION['taiKhoan'] === "Khoa1117" || $_SESSION['taiKhoan'] === "tomeme" || $_SESSION['taiKhoan'] === "Ryrem15" || $_SESSION['taiKhoan'] === "Mike" || $_SESSION['taiKhoan'] === "khanhbui" || $_SESSION['taiKhoan'] === "Hynbel" || $_SESSION['taiKhoan'] === "EmHiuuu")){
                    header("Location: ?act=/");
                } else {
                    $outWhitelist = $this->whitelist->listPlayerIsNotWhiteList();
                    $inWhitelist = $this->whitelist->inWhitelist();
                    $deniedWhitelist = $this->whitelist->deniedWhitelist();
                    require_once "views/whitelist.php";
                }
            }
        }
        
        function addWhitelist($name){
            $this->whitelist->addWhitelist($name);
        }
        function denyWhitelist($name){
            $this->whitelist->denyWhitelist($name);
        }
        function removeWhitelist($name){
            header("Location: ?act=white-list");
            
        }
    }
?>