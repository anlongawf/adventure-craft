<?php
    session_start();
    function sql($command){
        $connection = new PDO("mysql:host=localhost;dbname=playerpoints","root","Sqrtfl0@t01");
        $data = $connection->query($command)->fetch();
        return $data;
        // "SELECT points FROM playerpoints_points INNER JOIN playerpoints_username_cache ON playerpoints_points.uuid = playerpoints_username_cache.uuid WHERE playerpoints_username_cache.username = '".$_SESSION["taiKhoan"]."'"
    }
    if (isset($_SESSION["taiKhoan"])){
        $data = sql("SELECT points FROM playerpoints_points INNER JOIN playerpoints_username_cache ON playerpoints_points.uuid = playerpoints_username_cache.uuid WHERE playerpoints_username_cache.username = '".$_SESSION["taiKhoan"]."'");
        echo $data["points"];
    } else {
        echo 123456;
    }

?>