<!--   DASIGAN AMD SUZUKI
       BSIT 3-2           
	   IPAY, SERVICES   -->

       <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Services</title>
	<link rel="stylesheet" href="services_ipay.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="top_border">
		<a href="services_ipay.php"> <img src="logo.png"></a>
		<button onclick="location.href='signin.html'" type="button">Logout</button>
	</div>

	<button class="button-12" onclick="location.href='services_ipay.php'">Dashboard</button>
	<button class="button-13" onclick="location.href='aboutus.html'">About us</button>
	<button class="button-14" onclick="location.href='contacts.html'">Contacts</button>

	<div class="container">
		
		<div class="balance_display">
			<a><img src="logo.png"></a>

            <?php
				require "DBconnection.php";
				
                session_start();
                ob_start();

                $password = $_SESSION["passengerPassword"];
                $sql = "SELECT  * from ipay_user WHERE password = '$password' LIMIT 1";
                $result = $conn-> query($sql);

                if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                $number = $row['number'];
                $money = $row['money'];
                
                echo "<h3>0$number</h3>";
				echo "<h1>PHP $money.00</h1>";

                }} $conn-> close();
            ?>

			<h2>Available Balance</h2>
			<button onclick="location.href='cashin.html'" type="button">Add cash</button>
		</div>

		<button class="button-9" id = "profile" onclick="location.href='updateAccount.php'" ><img src="profile.png" height ="50" width="50"></button>
		<button class="button-10" id = "notif" onclick="location.href='notif.html'" ><img src="notif.png" height ="50" width="50"></button>
		<button class="button-11" id = "rewards" onclick="location.href='rewards.html'" ><img src="rewards.png" height ="50" width="50"></button>
	</div>
			
		<button class="button-1" id = "cash_in" name = "cash_in" onclick="location.href='cashin.html'" ><img src="cash in1.png" height ="50" width="50"><br>CASH IN</button> 
		<button class="button-2" id = "send_money" name = "send_money" onclick="location.href='sendmoney.html'"><img src="send money1.png" height ="50" width="50"><br>SEND MONEY</button>
		<button class="button-3" id = "request_money" name = "request_money" onclick="location.href='request.html'"><img src="request money1.png" height ="50" width="50"><br>REQUEST MONEY</button>
		<button class="button-4" id = "bank_transfer" name = "bank_transfer" onclick="location.href='banktransfer.html'"><img src="bank transfer1.png" height ="50" width="50"><br>BANK TRANSFER</button>
		<br>
		<button class="button-5" id = "pay_bills" name = "pay_bills" onclick="location.href='paybills.html'"><img src="pay bills1.png"><br>PAY BILLS</button>
		<button class="button-6" id = "buy_load" name = "buy_load" onclick="location.href='buyload.html'"><img src="buy load1.png"><br>BUY LOAD</button>
		<button class="button-7" id = "donate" name = "donate" onclick="location.href='donate.html'"><img src="donate1.png"><br>DONATE</button>	
		<button class="button-8" id = "qr" name = "qr"><img src="qr1.png" onclick="location.href='qr.html'"><br>QR CODE</button>

	</body>
</html>
