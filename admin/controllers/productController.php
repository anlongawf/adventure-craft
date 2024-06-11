<?php
    require_once "models/productModel.php";
    class productController{
        public $productModel;
        function __construct()
        {
            $this->productModel = new productModel();
        }
        function listProduct(){
            $pet = $this->productModel->listPet();
            $rank = $this->productModel->listRank();
            
            require_once "views/listProduct.php";
            
        }
    }

?>