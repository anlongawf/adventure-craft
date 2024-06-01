<?php
    require_once "models/rankModel.php";
    class rankController{
        public $rank;
        function __construct()
        {
            $this->rank = new rankModel();
        }
        function updateRank($id){
            $updateRank = $this->rank->findProductByID("shoprank",$id);
            $group = $this->rank->getPermission($updateRank['rank-group']);
            require_once "views/updateRank.php";
            if (isset($_POST["btn_updateRank"])){
                $id = $_POST["rank_id"];
                $nameRank = $_POST['nameRank'];
                $group = $_POST['group'];
                $price = $_POST['price'];
                $quyenLoi = preg_split("/\r\n|\n|\r/", $_POST['quyenLoi']);
                if (empty($_POST["img"]['name'])){
                    $img = '';
                } else {
                    $img = $_POST["img"]['name'];
                    $tmp = $_POST["img"]["tmp_name"];
                    move_uploaded_file($tmp,"../asset/img-ranks/".$img);
                }
                return $this->rank->updateRank($id,$nameRank,$img,$group,$price,$quyenLoi);
            }
        }
        
    }

?>