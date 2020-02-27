<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title></title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,600" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<script>
		function myfun(){
		var a=document.getElementById("dest").value;
if(a.includes('Gampaha')==false){

	document.getElementById("messages").innerHTML="Adress should contain Gampaha.";
	return false;
}}

	</script>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="card text-white bg-primary" style="width: 112rem;">
  <div class="card-header">
   <h4><strong>Ambulance Available time Slots</strong> </h4>
  </div>
 
</div>
						<form action="../login-check/available_check1M.php" method="POST" onsubmit="return myfun()">
							<div class="col-md-12">
								<div class="form-group">
									<input class="form-control" type="text" name="destination" placeholder="Enter Address" required> 
									<span class="form-label">Destination</span>
								</div>
							</div>
						
						
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="time" name="time" required>
									<span class="form-label">Time</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="date" name="date" required>
									<span class="form-label">Date</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-btn">
									<button class="submit-btn" name="bookM1" type="submit" >Check availability</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html> 