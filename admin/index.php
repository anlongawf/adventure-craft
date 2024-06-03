<?php
    session_start();
    require_once "controllers/productController.php";
    require_once "controllers/rankController.php";
    require_once "models/rankModel.php";
    require_once "models/productModel.php";
    // require_once "commons/function.php";
    $product = new productController();
    // // $pet = new petController();
    $rank = new rankController();
    $act = $_GET["act"] ?? '/';
    if ($act === "/"){
        $product->dashboard();
    } elseif ($act === "update-rank"){
        $rank->updateRank($_GET['id']);
    } elseif ($act === "delete-rank"){
        $rank->deleteRank($_GET['id']);
    }
     else {
        header("Location: ../");
    }

?>