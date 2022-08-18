<?php session_start();

    if(isset($_SESSION['usuario'])){
        include_once "header.php";
        include_once "nav.php";
        include_once "filter.php";
        include_once "footer.php";
    }else{
        header ('location: ../login.php');
    }
//include_once "functions.php";
//$employees = getEmployees();

?>

