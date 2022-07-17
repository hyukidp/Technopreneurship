<!--   DASIGAN, OBJERO, PINEDA, SUZUKI
       BSIT 3-2           
	   PASAHEROES, ADMIN PAGE  -->

       <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
       <html xmlns="http://www.w3.org/1999/xhtml">
       <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>Main page</title>
       <link rel="stylesheet" href="test.css">
       </head>
       
       <body>
           <<div class="top_border">
           <img src="logo.png">
            <button onclick="location.href='signin.html'" type="button">Logout</button>
        	</div>
               
		   <div class="records">
			
		   <table>
			   
		   <tr>
			   <th>Name</th>
			   <th>Number</th>
			   <th>Email</th>
			   <th>Password </th>
			   <th>Money</th>
			 
			   <th></th>
			</tr>
		   
		   </div>
			<?php
			
			require "DBconnection.php";
			
			session_start();
			   	ob_start();
			
	   		$query = "SELECT * from ipay_user";
		 	$data = mysqli_query($conn,$query);
			   
		   $total = mysqli_num_rows($data);
		   
		   if($total!=0){
			   while($result=mysqli_fetch_assoc($data)){
				   
				   
				   echo "
				   
				   <tr>
				   <td>".$result['name']."</td>
				   <td>".$result['number']."</td>
				   <td>".$result['email']."</td>
				   <td>".$result['password']."</td>
				   <td>".$result['money']."</td>
				  
				   
				   <input type='hidden' name='serialNo' value='".$result['password']."'>
				   <td><a href='process.php?rn=$result[password]'>Delete</a></td>
				   
				   </tr>
				   
				   ";
			   }
		   }
		else{
			echo '<script> alert("NO RECORDS FOUND"); </script>';
		}
			   $conn-> close();
		   ?>
           
          
			   </table>
       </body>
       </html>