
<?php
session_start();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>IMGT</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="../code.php" method="POST">
					<span class="login100-form-title p-b-43">
						<?php  
						if(isset($_SESSION["not_user"]) && $_SESSION["not_user"]!='')
                                   {
      
                                   echo '<h2 class"bg-info">'.$_SESSION["not_user"].'</h2>';
                                   unset($_SESSION["not_user"]);  
                                  }   
                        if(isset($_SESSION["password_error"]) && $_SESSION["password_error"]!='')
                                   {
      
                                   echo '<h2 class"bg-info">'.$_SESSION["password_error"].'</h2>';
                                   unset($_SESSION["password_error"]);  
                                  }   
                      ?>
						Create new Account
					</span>
					
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="first_name">
						<span class="focus-input100"></span>
						<span class="label-input100">first name</span>
					</div>	
				
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="last_name">
						<span class="focus-input100"></span>
						<span class="label-input100">last name</span>
					</div>

                   <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password2">
						<span class="focus-input100"></span>
						<span class="label-input100">Re Enter Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						

					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="registerbtn">
							Create 
						</button>
					</div>
					
				

					
				</form>

				<div class="login100-more" style="background-image: url('images/blood2.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>