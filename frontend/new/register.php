<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IMGT Project</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicons -->
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="form.css" rel="stylesheet">
  </head>
  <body>
    
    <!--/ Nav Star /-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
      <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        
        </button>
        <a class="navbar-brand" href="../index.php"><img src="logo1.png" alt="Logo"></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="../index.php">Home</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Our lab
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../about-us.php">About us</a>
                <a class="dropdown-item" href="../lab-quality.php">Our quality</a>
                
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Why CRYO Bank
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../Cryo1.php">Cryo precipitate Banking</a>
                <a class="dropdown-item" href="../Cryo2.php">The benefit of banking</a>
                <a class="dropdown-item" href="../Cryo3.php">processing Technology</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Test directory
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../tests.php">Common Tests</a>
                <a class="dropdown-item" href="../alltests.php">All Tests</a>
                
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Prepare for Tests
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="prepare-test.php">Serology</a>
                <a class="dropdown-item" href="prepare-test2.php">Microbiology</a>
                
              </div>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Contact us
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../contact.php">send message</a>
                <a class="dropdown-item" href="../feedback/feedback.php">send feedback</a>
                
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <?php
                if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]!='')
                {
                echo '<h6>'.$_SESSION["logged_in"].'</h6>';
                }
                ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../profile.php">visit profile</a>
                <a class="dropdown-item" href="../logout.php">logout</a>
                
              </div>
            </li>
            <li class="nav-item ">
              <?php
              if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]!=''){ // I use false condition
              echo '<a href="../logout.php"><button class="btn btn-danger">Sign out</button></a>';
              }else{
              echo '<a href="../log/index.php"><button class="btn btn-primary">Sign in</button></a>';
              }
              ?>
              
              
            </li>
            
          </ul>
        </div>
        
      </div>
    </nav>
    <!--/ Nav End /-->
    <hr style="   border-top: 3px double #8c8b8b;">
    <div></div>
    <br>
    <br>
    <br>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Register for mobile test</h5>
                <form class="form-signin" action="../code.php" method="POST">
                  
                  <div class="form-group ">
                    <label for="inputEmail4" style="color: black;">Full name</label>
                    <input type="text" name="full_name" required="name" class="form-control" id="inputEmail4" placeholder="full name">
                    
                  </div>
                    <div class="form-group ">
                    <label for="inputAddress" style="color: black;">E-mail</label>
                    <input type="email" name="email" class="form-control" id="inputAddress" placeholder="mail@gmail.com" required="email">
                  </div>

                       <div class="form-group">
                    <label for="tests" style="color: black;">Choose test</label> <br>
                    <select id="cars" name="test">
                      <option value="Blood Picture "> Blood Picture </option>
                      <option value="CA 125">CA 125</option>
                      <option value="Creatinine">Creatinine</option>
                      <option value="ANA/ANF">ANA/ANF</option>
                      <option value="APTT/PTTK">APTT/PTTK</option>
                      <option value="Ferritin">Ferritin</option>
                      <option value="EGFR(Estimated GFR)"> EGFR(Estimated GFR)  </option>
                      <option value="Cloride">Cloride</option>
                    </select>
                  </div>




                  <div class="form-group">
                    <label for="inputAddress" style="color: black;">Address</label>
                    <input type="text-area" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" required="address">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2" style="color: black;" >Phone number</label>
                    <input type="number" name="phone" class="form-control" id="inputAddress2" placeholder="mobile or land phone" required="enter name">
                  </div>
                  
                  
                  <input type="submit" name="mobileregister" class="btn btn-lg btn-primary btn-block text-uppercase"  value="Register for test"/>
                  <hr class="my-4">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
    <?php
    include("footer2.php");
    ?>