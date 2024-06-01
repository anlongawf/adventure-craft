<?php
    // require_once "../commons/function.php";
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
    }

?>