<?php
    session_start();
    function sqlCommand($dbname,$command){
        $conn = new PDO("mysql:host=adventurecraft.site;dbname=$dbname","dptadven_adventure","Sqrtfl0@t01");
        return $conn->query($command);
    }
?>