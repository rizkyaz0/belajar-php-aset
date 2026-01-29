<?php 

session_start();
$_SESSION['status']='oke';
//session_destroy();

if($_SESSION['status']!=''){
    header('Location: views/dashboard.php');
    exit;
}else{
    header('Location: views/login.php');
    exit;
}

?>