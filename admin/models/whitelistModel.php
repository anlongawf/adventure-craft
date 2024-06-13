<?php
    require_once "commons/function.php";
    // Status:
    // 1: Đang ở trong whitelist
    // 0: Chưa được add whitelist 
    // 2: Bị từ chối
    class whitelistModel{
        public $conn;
        public $discord;
        function __construct()
        {
            $this->conn = authme();
        }
        function listPlayerIsNotWhiteList(){
            return $this->conn->query("SELECT * FROM users WHERE whitelist=0 ORDER BY name ASC")->fetchAll();
        }
        function addWhitelist($name){
            $user = $this->conn->query("SELECT realName from users WHERE name = '$name'")->fetch()['realName'];
            sendDiscordMessage("https://discord.com/api/webhooks/1241391313878913024/09dsPMRgXCokKh69J7Ulblu3772m5FKiqKD4aS5iwpesJPdRfQddhBq7ObW1uUPkXshW","whitelist add $user");
            sendDiscordMessage("https://discord.com/api/webhooks/1250103719689977897/GPMAW2kC9Wn0rHUS5IWDsF_AU09X27xW3tvZPoEObjS55qwvTGDsjC38dROjYV1By8QC","**".$_SESSION['taiKhoan']."** đã add whitelist cho **$user**");
            $this->conn->prepare("UPDATE users SET whitelist=1 WHERE name='$name'")->execute();
            header("Location: ?act=white-list");
        }

        function inWhitelist(){
            return $this->conn->query("SELECT name,realName from users WHERE whitelist=1")->fetchAll();
        }
        // function removeWhitelist($name){
        //     return true;
        // }
        function deniedWhitelist(){
            return $this->conn->query("SELECT name,realName from users WHERE whitelist=2")->fetchAll();
        }
        function denyWhitelist($name){
            $user = $this->conn->query("SELECT realName from users WHERE name = '$name'")->fetch()['realName'];
            sendDiscordMessage("https://discord.com/api/webhooks/1241391313878913024/09dsPMRgXCokKh69J7Ulblu3772m5FKiqKD4aS5iwpesJPdRfQddhBq7ObW1uUPkXshW","whitelist remove $user");
            sendDiscordMessage("https://discord.com/api/webhooks/1250103719689977897/GPMAW2kC9Wn0rHUS5IWDsF_AU09X27xW3tvZPoEObjS55qwvTGDsjC38dROjYV1By8QC","**".$_SESSION['taiKhoan']."** đã xóa whitelist của **$user**");
            $this->conn->prepare("UPDATE users SET whitelist=2 WHERE name='$name'")->execute();
            header("Location: ?act=white-list");
        }
    }
?>