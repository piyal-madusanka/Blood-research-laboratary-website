<?php session_start(); ?>
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
            <a href="../log/index.php" class="btn btn-primary">Sign in</a>
      
          </li>
          
        </ul>
      </div>
   
    </div>
  </nav>
  <!--/ Nav End /-->



<hr style="   border-top: 3px double #8c8b8b;">
  <div><?php 
              if(isset($_SESSION["not_working"]) && $_SESSION["not_working"]!='')
                      {
                       echo '<h6>'.$_SESSION["not_working"].'</h6>';
                      }
          ?></div>
  <br>
  <br>
  <br>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Medical history form</h5>
  <form class="form-signin" action="../code.php" method="POST">

       
 
 
 
  <div class="form-group">
    <label for="input-test" style="color: black;">Gender</label>
       
      <select id="input-test" class="form-control" name="gender">
       <option> Male</option>
       <option> Female</option>
 

      </select>
    </div>  
  <div class="form-group">
    <label for="input1" style="color: black;">Check the conditions that apply to you or to any members of your immediate relatives:</label>
    <textarea type="text" class="form-control" name="c_condition" placeholder="add detail"></textarea>
  </div>
   <div class="form-group">
    <label for="input1" style="color: black;">Check the symptoms that you're currently experiencing:</label>
    <textarea type="text" class="form-control" name="c_symptoms" placeholder="add detail"></textarea>
  </div>
   <div class="form-group">
    <label for="input3" style="color: black;">Are you currently taking any medication?</label>
    <textarea type="text" class="form-control" name="c_medication" placeholder="add detail"></textarea>
  </div>
     <div class="form-group">
    <label for="input4" style="color: black;">Do you have any medication allergies ?</label>
    <textarea type="text" class="form-control" name="c_allergies" placeholder="add detail"></textarea>
  </div>
       <div class="form-group">
    <label for="input5" style="color: black;">Do you use or do you have history of using tobacco ?</label>
    <textarea type="text" class="form-control" name="c_tobbaco" placeholder="add detail"></textarea>
  </div>
  <div class="form-group">
    <label for="input6" style="color: black;">Do you use or do you have history of using illegal drugs ?</label>
    <textarea type="text" class="form-control" name="c_drugs" placeholder="add detail"></textarea>
  </div>
  <div class="form-group">
    <label for="input7" style="color: black;">How often do you consume alcohol ?</label>
    <textarea type="text" class="form-control" name="c_alcohol" placeholder="add detail"></textarea>
  </div>

             <div>
        <label for="terms_and_conditions" style="color: black;" >I agree to the Terms of Service of meditech lab:</label>
        <input type="checkbox" id="terms_and_conditions" value="1" onclick="terms_changed(this)" />
    </div>
    <div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="medi_history_button" type="submit" id="submit_button"disabled>submit</button>
              <hr class="my-4">
            
 </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

<script >
  function terms_changed(termsCheckBox){
    //If the checkbox has been checked
    if(termsCheckBox.checked){
        //Set the disabled property to FALSE and enable the button.
        document.getElementById("submit_button").disabled = false;
    } else{
        //Otherwise, disable the submit button.
        document.getElementById("submit_button").disabled = true;
    }
}

</script>


  <?php
include("footer2.php");
  ?>   