<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: public/employees.php');
    }else{
        header('location: login.php');
    }


?>