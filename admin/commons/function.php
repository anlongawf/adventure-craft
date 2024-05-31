<?php
    require_once "models/productModel.php";
    function connectDatabase(){
        $conn = new PDO("mysql:host=localhost;dbname=shop","root","Sqrtfl0@t01");
        return $conn;
    }
?>