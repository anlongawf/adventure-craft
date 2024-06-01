<?php
    class rankModel{
        public $conn;
        function __construct()
        {
            $this->conn = connectDatabase();
        }
        function findProductByID($type,$id){
            if ($type = "shoppet"){
                return $this->conn->query("SELECT * FROM shoppet WHERE pet_id = $id")->fetch();
            } else {
                return $this->conn->query("SELECT * FROM shoprank WHERE rank_id = $id")->fetch();
            }
        }
        function getPermission($group){
            return $this->conn->query("SELECT quyen_loi FROM quyenloi JOIN shoprank ON quyenloi.rank_group = shoprank.rank_group where quyenloi.rank_group = '$group'")->fetch();
        }
        function updateRank($id,$nameRank,$img,$group,$price,$quyenLoi){
            if (empty($img)){
                $updateRank = "UPDATE shoprank SET rank_nameRank = '$nameRank',rank_group='$group',rank_price=$price WHERE rank_id = $id";
            } else {
                $updateRank = "UPDATE shoprank SET rank_nameRank = '$nameRank',rank_img = '$img',rank_group='$group',rank_price=$price WHERE rank_id = $id";
            }
            $this->conn->prepare($updateRank)->execute();
            $this->conn->prepare("DELETE FROM quyenloi WHERE rank_group = '$group'");
            foreach ($quyenLoi as $item){
                $this->conn->prepare("INSERT INTO quyenloi(quyen_loi,rank_group) VALUES('$item',$group)");
            }
        }
    }

?>