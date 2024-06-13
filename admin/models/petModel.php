<?php
    require_once "commons/function.php";
    class petModel{
        public $conn;
        function __construct(){
            $this->conn = connectDatabase();
        }
        function insertPet($namPet,$img,$price,$skinAmount,$canRide,$canFly,$perm){
            return $this->conn->prepare("INSERT INTO shoppet(pet_img,pet_namePet,pet_price,pet_skinAmount,pet_canRide,pet_canFly,pet_permission) VALUES('$img','$namPet',$price,$skinAmount,$canRide,$canFly,'$perm')")->execute();
        }
        function findPetbyId($id){
            return $this->conn->query("SELECT * FROM shoppet WHERE pet_id = $id")->fetch();
        }
        function findPermById($namePet){
            return $this->conn->query("SELECT permission from soLuongSkin where pet_namePet = '$namePet'")->fetchAll();
        }
        function updatePet($id,$namPet,$img,$price,$canFly,$canRide,$permission,$format_perm){
            $skinAmount = count($format_perm);
            if (empty($img)){
                $updatePet = "UPDATE shoppet SET pet_namePet = '$namPet',pet_price=$price,pet_skinAmount=$skinAmount,pet_canRide=$canRide,pet_canFly=$canFly,pet_permission='$permission' WHERE pet_id = $id";
            } else {
                $updatePet = "UPDATE shoppet SET pet_img='$img',pet_namePet = '$namPet',pet_price=$price,pet_skinAmount=$skinAmount,pet_canRide=$canRide,pet_canFly=$canFly,pet_permission='$permission' WHERE pet_id = $id";
            }
            $this->conn->prepare($updatePet)->execute();
            $this->conn->prepare("DELETE FROM soLuongSkin WHERE pet_namePet = '$namePet'")->execute();
            foreach ($format_perm as $item) {
                if ($this->conn->prepare("INSERT INTO soLuongSkin (permission,  pet_namePet) VALUES ('$item', '$namePet')")->execute()){
                    echo "a";
                } else {
                    echo "b";
                }
            }
            header("Location: ?act=list-product");
        }
        function deletePet($id,$name){
            $this->conn->prepare("DELETE FROM shoppet WHERE pet_id = $id")->execute();
            $this->conn->prepare("DELETE FROM soLuongSkin WHERE pet_namePet = '$name'")->execute();
        }
    }
?>