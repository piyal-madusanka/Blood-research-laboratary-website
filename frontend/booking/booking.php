<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

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
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="card text-white bg-primary" style="width: 112rem;">
  <div class="card-header">
   <h4><strong>Ambulance Available time Slots</strong> </h4>
  </div>
  <ul class="list-group list-group-flush " >
   <li class="list-group-item" style="color: black;"><strong> Monday <8.00 am >---<8.00pm></strong> </li>
    <li class="list-group-item" style="color: black;"><strong>Wednesday <8.00 am >---<8.00pm></strong> </li>
    <li class="list-group-item" style="color: black;"><strong>Saturday<8.00 am >---<8.00pm></strong> </li>
  </ul>
</div>
						<form>
							<div class="col-md-12">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Enter Address">
									<span class="form-label">Destination</span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Enter test name">
									<span class="form-label">Enter test name</span>
								</div>
							</div>
						
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="time" required>
									<span class="form-label">Time</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="date" required>
									<span class="form-label">Date</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-btn">
									<button class="submit-btn" onclick="window.location.href = '../new/register.php';">Check availability</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html> 