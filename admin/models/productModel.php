<?php
    require_once "commons/function.php";
    class productModel{
        public $conn;
        function __construct()
        {
            $this->conn = connectDatabase();
        }
        function listPet(){
            return $this->conn->query("SELECT * FROM shoppet")->fetchAll();
        }
        function listRank(){
            return $this->conn->query("SELECT * FROM shoprank")->fetchAll();
        }
        function findProductById($type,$id){
            if ($type === "rank"){
                return $this->conn->query("SELECT * FROM shoprank WHERE rank_id = $id")->fetchAll();
            } elseif ($type === "pet"){
                return $this->conn->query("SELECT * FROM shoppet WHERE pet_id = $id")->fetch();
            } else {
                echo "ERROR";
            }
        }
    }

?>