<?php
    require_once "controllers/productController.php";
    require_once "controllers/rankController.php";
    require_once "models/rankModel.php";
    require_once "models/productModel.php";
    require_once "commons/function.php";
    $product = new productController();
    // $pet = new petController();
    $rank = new rankController();
    $act = $_GET["act"] ?? '/';
    match($act){
        "/" => $product->dashboard(),
        "update-rank" =>$rank->updateRank($_GET["id"]),
    }

?>