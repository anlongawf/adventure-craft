<?php
    require_once "function.php";
    if(isset($_POST['buyRank'])){
        $group = $_POST['buyRank'];
        $result = sqlCommand("shop","SELECT * FROM shoprank WHERE rank_group='$group'")->fetch();
        $result = json_encode($result);
        echo $result;
    }
    

?>