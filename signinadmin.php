<?php	
	
	require "DBconnection.php";

	$adminname = $_POST['adminUsername'];
    $adminpassword = $_POST['adminPassword'];

	if($adminname == "admin123" && $adminpassword == "admin123"){
		
		header("Location: test.php");
	}else{
		
		echo "<script>
                    alert('Sorry, you entered an incorrect email or password.');
             		window.location.href='signin-admin.html';
                    </script>";
	}

?>