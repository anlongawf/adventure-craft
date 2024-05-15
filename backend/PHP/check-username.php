<?php
    session_start();
    if (isset($_SESSION["taiKhoan"])){
        echo $_SESSION["taiKhoan"];
    } else {
        echo "user";
    }



?>