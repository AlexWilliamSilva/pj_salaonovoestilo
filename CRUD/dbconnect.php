<?php   
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbSalaoNovoEstilo";

    $con = mysqli_connect($localhost, $username, $password, $dbname); 
     if ($con->connect_error) 
     {
        die ("Falha na Conexão: " .$con->connect_error); 
     }  
?>