<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Account</title>
<link rel="stylesheet" href="accountsettings.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
	
	<div class="left">
        <div class="left_text">
			<div class="logo">
				<img src="logoblack1.png" alt="logo">
				<h1>Pay</h1>
				<h2>PROVIDING THE BEST THINGS ONLINE.</h2>
			</div>
		</div>
	</div>

	<div class="right">	
        <p> Edit your account </p>
		<form action = "updateAccount.php" method="post">	
		<div class="inputs">
			
	<?php		
		
	require "DBconnection.php";
	
	session_start();
	ob_start();

	$password = $_SESSION["passengerPassword"];
	$sql = "SELECT  * from ipay_user WHERE password = '$password' LIMIT 1";
	$result = $conn-> query($sql);
	
	if($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			
			
			$name = $row['name'];
			$number = $row['number'];
			$email = $row['email'];
			$password = $row['password'];
                                    
							
								echo '<br><label class="name">Full Name</label><br/>';
								echo '<i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>';
								echo "<input type='text' id = 'name' value = '$name' name = 'name' placeholder='Full Name' onkeyup='lettersOnly(this)' required>";
		
								echo '<br><label class="number">Phone Number</label><br/>';
								echo '<i class="fa fa-phone fa-lg fa-fw" aria-hidden="true"></i>';
								echo "<input type='text'  id ='number' value='$number' name = 'number' placeholder='Phone Number' maxlength='11' onkeyup='numbersOnly(this)' required>";

								echo '<br><label class="email">Email Address</label><br/>';
								echo '<i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>';
								echo "<input type='text'  id = 'email' value='$email' name = 'email' placeholder='Email Address' onkeyup='nospaces(this)'  required>";
		
								echo '<br><label class="password">Password</label><br/>';
								echo '<i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>';
								echo "<input type='password' id = 'pasword'  value='$password' name = 'password' placeholder='Password' onkeyup='passwordOnly(this)' required>";
		}
		
	}
	else{
		
	}
	
	$conn-> close();
	
	?>
				<div class="input_buttons">
					
					<button type="submit" id = "Submit" name = "Submit" formaction="update.php">Save changes </button>
				</div>
			</form>
		</div>
	</div>
	<script>
		function lettersOnly(input){
			var regex = /[^a-zA-z\s]/gi;
			input.value = input.value.replace(regex, "");
		}
		
		function numbersOnly(input){
			var regex = /[^0-9]/gi;
			input.value = input.value.replace(regex, "");
		}
		
		function nospaces(input){
			var regex = /[^@.0-9a-zA-zÀ-ž]./gi;
			input.value = input.value.replace(regex, "");
		}
		
		function passwordOnly(input){
			var regex = /[^0-9a-zA-zÀ-ž].{8,}/gi;
			input.value = input.value.replace(regex, "");
		}
	</script>
</body>
</html>
