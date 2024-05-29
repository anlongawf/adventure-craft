<?php
    session_start();
    function sqlCommand($dbname,$command){
        $conn = new PDO("mysql:host=127.0.0.1;dbname=$dbname","root","Sqrtfl0@t01");
        return $conn->query($command);
    }
?>