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
            
        }
        function updateRank($id){
            
            $updateRank = $this->productModel->findProductById("rank",$id);
            require_once "views/updateRank.php";
            // if(isset($_POST["btn_updateRank"])){

            // }
        }
    }

?>