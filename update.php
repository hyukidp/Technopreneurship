<?php
	require "DBconnection.php";
    
	session_start();
	ob_start();

    if(isset($_POST['Submit'])){

        $password = $_SESSION["passengerPassword"];

        $query = "UPDATE `ipay_user` SET `name`='$_POST[name]',`number`='$_POST[number]',`email`='$_POST[email]', `password` = '$_POST[password]' where `password`='$password'";
        $query_run = mysqli_query($conn,$query);

        if(!$query_run){
            die('could not insert into program '.$conn->error);
                }else{
                    header("Location: services_ipay.php");
                }
                die(); 
    }
?>