<?php
    require_once "models/productModel.php";
    require_once "models/rankModel.php";
    function connectDatabase(){
        $conn = new PDO("mysql:host=adventurecraft.site;dbname=shop","antrc2","Sqrtfl0@t01");
        return $conn;
    }
?>