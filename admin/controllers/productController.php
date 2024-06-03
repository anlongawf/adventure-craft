<?php
    require_once "models/productModel.php";
    class productController{
        public $productModel;
        function __construct()
        {
            $this->productModel = new productModel();
        }
        function dashboard(){
            $pet = $this->productModel->listPet();
            $rank = $this->productModel->listRank();
            
            require_once "views/dashboard.php";
            if (!(isset($_SESSION['taiKhoan']) && ($_SESSION['taiKhoan'] === "AnTrc2" || $_SESSION['taiKhoan'] === "Ans"))) {
                header("Location: ../index.php");
                exit; // Đảm bảo không có mã HTML hoặc mã PHP nào được thực thi sau lệnh header
            }
        }
        function updateRank($id){
            
            $updateRank = $this->productModel->findProductById("rank",$id);
            require_once "views/updateRank.php";
            // if(isset($_POST["btn_updateRank"])){

            // }
        }
    }

?>