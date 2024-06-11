<?php
    require_once "commons/function.php";
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
            sendDiscordMessage("https://discord.com/api/webhooks/1250064542893871104/Q0NMnTPCUGgPmO9kNBhMaHgIVUGVYWnREJIaCUb7lcsNpGdU9xOHVEs50OqNYYL-ZrVg","whitelist add $name");
            $this->conn->prepare("UPDATE users SET whitelist=1 WHERE name='$name'")->execute();
            header("Location: ?act=white-list");
        }
        function removeWhitelist($name){
            return true;
        }
    }
?>