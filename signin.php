<?php

    require "DBconnection.php";
	session_start();

		if(isset($_POST['passengerEmail']) && isset($_POST['passengerPassword'])){
        $passengerEmail = $_POST['passengerEmail'];
        $passengerPassword = $_POST['passengerPassword'];

        $query = ("select email, password from ipay_user where email='$passengerEmail' and password = '$passengerPassword'");
        $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result)>0){
		        $_SESSION["passengerPassword"] = $_POST['passengerPassword'];
                header("Location: authentication.html");
            } 
            else{
                echo "<script>
                    alert('Sorry, you entered an incorrect email or password.');
                    window.location.href='signin.html';
                    </script>";
            }
    }
?>