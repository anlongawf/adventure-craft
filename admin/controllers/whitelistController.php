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
                if (!($_SESSION['taiKhoan'] === "AnTrc2" || $_SESSION['taiKhoan'] === "Ans")){
                    header("Location: ?act=/");
                } else {
                    $allUser = $this->whitelist->listPlayerIsNotWhiteList();
                    require_once "views/whitelist.php";
                }
            }
        }
        function addWhitelist($name){
            $this->whitelist->addWhitelist($name);
        }
        function removeWhitelist($name){
            if($this->whitelist->removeWhitelist($name)){
                header("Location: ?act=white-list");
            }
        }
    }
?>