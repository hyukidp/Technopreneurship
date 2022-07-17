<?php 
    $server= "localhost";
    $username= "root";
    $password= "";
    $dbname= "ipaydb";

    $conn= mysqli_connect($server, $username, $password, $dbname);

    if($conn == false){
        die('Connection Failed'.$conn->connect_error);
    }
?>