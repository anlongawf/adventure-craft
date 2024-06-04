<?php
    require_once "models/rankModel.php";
    class rankController{
        public $rank;
        function __construct()
        {
            $this->rank = new rankModel();
        }
        function updateRank($id){
            $updateRank = $this->rank->findProductByID($id);
            $group = $this->rank->getPermission($updateRank['rank_group']);
            require_once "views/updateRank.php";
            if (isset($_POST["btn_updateRank"])){
                $id = $_POST["rank_id"];
                $nameRank = $_POST['nameRank'];
                $group = $_POST['group'];
                $price = $_POST['price'];
                $quyenLoi = explode("\n", $_POST['quyenLoi']);
                $format_quyenLoi = [];
                foreach ($quyenLoi as $value){
                    if ($value !== "" && trim($value) !== "") {
                        $format_quyenLoi[] = $value;
                    }
                }
                if (empty($_FILES["img"]['name'])){
                    $img = '';
                } else {
                    $img = $_FILES["img"]['name'];
                    $tmp = $_FILES["img"]["tmp_name"];

                    move_uploaded_file($tmp,"../asset/img-ranks/".$img);
                }
                $this->rank->updateRank($id,$nameRank,$img,$group,$price,$format_quyenLoi);

            }
        }
        function deleteRank($id){
            $group = $this->rank->findProductById($id)["rank_group"];
            $this->rank->deleteRank($id,$group);
            header("Location: ?act=/");
            
        }
        function insertRank(){
            require_once "views/insertRank.php";
            if (isset($_POST['btn_insertRank'])){
                $nameRank = $_POST['nameRank'];
                $group = $_POST['group'];
                $price = $_POST['price'];
                if (empty($_FILES["img"]['name'])){
                    $img = '';
                } else {
                    $img = $_FILES["img"]['name'];
                    $tmp = $_FILES["img"]["tmp_name"];

                    move_uploaded_file($tmp,"../asset/img-ranks/".$img);
                }
                if($this->rank->insertRank($nameRank,$group,$price,$img)){
                    header("Location: ?act=/");
                } else {
                    echo "Lỗi";
                }
            }
        }
        
    }

?>