<?php
    require_once "commons/function.php";
    class rankModel{
        public $conn;
        function __construct()
        {
            $this->conn = connectDatabase();
        }
        function findProductByID($id){
                return $this->conn->query("SELECT * FROM shoprank WHERE rank_id = $id")->fetch();
        }
        function getPermission($group){
            return $this->conn->query("SELECT quyen_loi FROM quyenloi where rank_group = '$group'")->fetchAll();
        }
        function updateRank($id,$nameRank,$img,$group,$price,$quyenLoi){
            if (empty($img)){
                $updateRank = "UPDATE shoprank SET rank_nameRank = '$nameRank',rank_group='$group',rank_price=$price WHERE rank_id = $id";
            } else {
                $updateRank = "UPDATE shoprank SET rank_nameRank = '$nameRank',rank_img = '$img',rank_group='$group',rank_price=$price WHERE rank_id = $id";
            }
            $this->conn->prepare($updateRank)->execute();
            $this->conn->prepare("DELETE FROM quyenloi WHERE rank_group = ?")->execute([$group]);

            // Thêm dữ liệu mới vào bảng quyenloi
            foreach ($quyenLoi as $item) {
                $stmt = $this->conn->prepare("INSERT INTO quyenloi (quyen_loi, rank_group) VALUES (?, ?)");
                $stmt->execute([$item, $group]);
            }
            header("Location: ?act=/");
        }
        function deleteRank($id,$group){
            $this->conn->prepare("DELETE FROM shoprank WHERE rank_id = '$id'")->execute();
            $this->conn->prepare("DELETE FROM quyenloi WHERE rank_group = '$group'")->execure();
            header("Location: ?act=/");
        }
    }

?>