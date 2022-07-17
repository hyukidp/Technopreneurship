<?php

	require "DBconnection.php";

	session_start();
    ob_start();
		
		
		$password = $_GET['rn'];
		$query = "DELETE FROM ipay_user WHERE password='$password'";
		$data = mysqli_query($conn,$query);
		if($data){
			header("Location: test.php");
			echo("<script>alert('Record Deleted from Database')");
			
		}
		
		else{
			echo("<script>alert('Failed to delete from Database')");
			header("Location: test.php");
		}
?>