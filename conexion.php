<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=id17537453_login_tuto', 'id17537453_login_tuto_accor', 'inefable.PA55');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>