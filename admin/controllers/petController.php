<?php
    require_once "models/petModel.php";
    class petController{
        public $pet;
        function __construct()
        {
            $this->pet = new petModel();
        }
        function insertPet(){
            require_once "views/insertPet.php";
            if (isset($_POST["btn_insertPet"])){
                $namPet = $_POST['namePet'];
                $perm = $_POST['permission'];
                if (empty($_FILES["img"]['name'])){
                    $img = '';
                } else {
                    $img = $_FILES["img"]['name'];
                    $tmp = $_FILES["img"]["tmp_name"];

                    move_uploaded_file($tmp,"../asset/img-pets/".$img);
                }
                $price = $_POST['price'];
                $skinAmount = $_POST['skinAmount'];
                $canRide = $_POST['canRide'];
                $canFly = $_POST['canFly'];
                if ($this->pet->insertPet($namPet,$img,$price,$skinAmount,$canRide,$canFly,$perm)){
                    header("Location: ?act=/");
                } else {
                    echo "Lỗi";
                }
            }
        }
        function updatePet($id){
            $pet = $this->pet->findPetById($id);
            $perm = $this->pet->findPermById($pet['pet_namePet']);
            require_once "views/updatePet.php";
            if (isset($_POST['btn_updatePet'])){
                $id = $_POST['id'];
                $namPet = $_POST['namePet'];
                $price = $_POST['price'];
                $canFly = $_POST['canFly'];
                $canRide = $_POST['canRide'];
                $permission = $_POST['permission'];
                $perm = explode("\n", $_POST['skin']);
                $format_perm = [];
                foreach ($perm as $value){
                    if ($value !== "" && trim($value) !== "") {
                        $format_perm[] = $value;
                    }
                }
                if (empty($_FILES["img"]['name'])){
                    $img = '';
                } else {
                    $img = $_FILES["img"]['name'];
                    $tmp = $_FILES["img"]["tmp_name"];

                    move_uploaded_file($tmp,"../asset/img-pets/".$img);
                }
                var_dump($_POST);
                $this->pet->updatePet($id,$namPet,$img,$price,$canFly,$canRide,$permission,$format_perm);
            }
        }
        function deletePet($id){
            $namePet = $this->pet->findPetById($id)['pet_namePet'];
            $this->pet->deletePet($id,$namePet);
            header("Location: ?act=/");
        }
    }
?>