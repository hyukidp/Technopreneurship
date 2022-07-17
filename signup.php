<?php 
	require "DBconnection.php";
	
    $name = $_POST['fullName'];
    $email = $_POST['passengerEmail'];
    $password = $_POST['passengerPassword'];
    $number = $_POST['number'];
	
	$query = $conn->prepare("insert into ipay_user(name, email, password,number)values(?,?,?,?)");
	$query->bind_param("sssi",$name,$email,$password,$number);
	$query->execute();
	header("Location: signin.html");
	$query->close();
	$conn->close();
?>