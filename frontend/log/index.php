
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

                        
						 if(isset($_SESSION["wrong"]) && $_SESSION["wrong"]!='')
                      {
      
                          echo '<h2 class"bg-info">'.$_SESSION["wrong"].'</h2>';

                        }

                          

						 if(isset($_SESSION["user"]) && $_SESSION["user"]!='')
                      {
      
                          echo '<h2 class"bg-info">'.$_SESSION["user"].'</h2>';
                          unset($_SESSION["user"]);  
                      }elseif (isset($_SESSION["invalid1"]) && $_SESSION["invalid1"]!='') {

                      	   echo '<h2 class"bg-info">'.$_SESSION["invalid1"].'</h2>';
                         
                      }elseif (isset($_SESSION["invalid2"]) && $_SESSION["invalid2"]!='') {

                      	   echo '<h2 class"bg-info">'.$_SESSION["invalid2"].'</h2>';
                         
                      }elseif (isset($_SESSION["invalid3"]) && $_SESSION["invalid3"]!='') {

                      	   echo '<h2 class"bg-info">'.$_SESSION["invalid3"].'</h2>';
                         
                      }        


                       ?>

						please Login to continue
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="name_reg">
						<span class="focus-input100"></span>
						<span class="label-input100">name</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass_reg">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>	

				
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="loginbutton">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
						<a><button onclick="window.location.href = 'index2.php';" class="login100-form-btn">Create new Account</button></a>
						 
						</span>
					</div>

					
				</form>

				<div class="login100-more" style="background-image: url('images/blood.jpg');">
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