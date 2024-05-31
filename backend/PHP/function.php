<?php
    session_start();
    function sqlCommand($dbname,$command){
        $conn = new PDO("mysql:host=103.237.87.46;dbname=$dbname","antrc2","Sqrtfl0@t01");
        return $conn->query($command);
    }
?>