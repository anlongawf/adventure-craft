<?php

    session_start();
    
    require_once "controllers/productController.php";
    require_once "controllers/rankController.php";
    require_once "controllers/petController.php";
    require_once "controllers/whitelistController.php";
    require_once "controllers/dashboardController.php";
    require_once "models/rankModel.php";
    require_once "models/productModel.php";
    require_once "models/petModel.php";
    require_once "models/whitelistModel.php";
    require_once "models/dashboardModel.php";
    require_once "commons/function.php";
    $product = new productController();
    $pet = new petController();
    $rank = new rankController();
    $whitelist = new whitelistController();
    $dashboard = new dashboardController();
    $act = $_GET["act"] ?? '/';
    if ($act === "/"){
        $dashboard->dashboard();
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
    } elseif ($act === "list-product"){
        $product->listProduct();
    } elseif ($act === "white-list"){
        $whitelist->whitelist();
    } elseif ($act === "add-whitelist"){
        $whitelist->addWhitelist($_GET['name']);
    } elseif ($act === "deny-whitelist"){
        $whitelist->denyWhitelist($_GET['name']);
    } elseif($act === "remove-whitelist"){
        $whitelist->removeWhitelist($_GET['name']);
    }
     else {
        header("Location: ../");
    }


?>