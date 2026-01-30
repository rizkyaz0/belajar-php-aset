<?php 

session_start();

if($_SESSION['status']!=''){
   include('views/dashboard.php');
    exit;
}else{
    include('views/login.php');
    exit;
}

?>