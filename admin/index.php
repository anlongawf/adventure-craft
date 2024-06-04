<?php

    session_start();
    
    require_once "controllers/productController.php";
    require_once "controllers/rankController.php";
    require_once "controllers/petController.php";
    require_once "models/rankModel.php";
    require_once "models/productModel.php";
    require_once "models/petModel.php";
    require_once "commons/function.php";
    $product = new productController();
    $pet = new petController();
    $rank = new rankController();
    $act = $_GET["act"] ?? '/';
    if ($act === "/"){
        if (!(isset($_SESSION['taiKhoan']) && ($_SESSION['taiKhoan'] === "AnTrc2" || $_SESSION['taiKhoan'] === "Ans"))) {
            header("Location: ../");
        } else {
            $product->dashboard();
        }
        
    } elseif ($act === "update-rank"){
        $rank->updateRank($_GET['id']);
    } elseif ($act === "delete-rank"){
        $rank->deleteRank($_GET['id']);
    } elseif ($act === 'insert-rank'){
        $rank->insertRank();
    } elseif ($act === 'insert-pet'){
        $pet->insertPet();
    } elseif ($act === 'update-pet'){
        $pet->updatePet($_GET['id']);
    } elseif ($act === "delete-pet"){
        $pet->deletePet($_GET['id']);
    }
     else {
        header("Location: ../");
    }


?>