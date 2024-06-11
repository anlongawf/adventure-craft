<?php
    require_once "models/dashboardModel.php";
    class dashboardController{
        public $dashboard;
        function __construct()
        {
            $this->dashboard = new dashboardModel();
        }
        function dashboard(){
            require_once "views/dashboard.php";
            $this->dashboard->checkLogin();
        }
    }
?>