<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Title  -->
        <title>IMGT project</title>
        <!-- Favicon  -->
        
        <!-- Core Style CSS -->
        
        <link rel="stylesheet" href="css/core-style.css">
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div class="medica-load"></div>
            <img src="img/core-img/plus.png" alt="logo">
        </div>
        <header class="header-area">
            
            <!-- Main Header Area -->
            <div class="main-header-area" id="stickyHeader">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 h-100">
                            <div class="main-menu h-100">
                                <nav class="navbar h-100 navbar-expand-lg">
                                    <!-- Logo Area  -->
                                    <a class="navbar-brand" href="index.php"><img src="img/core-img/logo1.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medicaMenu" aria-controls="medicaMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>
                                    <div class="collapse navbar-collapse" id="medicaMenu">
                                        <!-- Menu Area -->
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Lab</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="about-us.php">About us</a>
                                                    <a class="dropdown-item" href="lab-quality.php">Our Quality</a>
                                                    
                                                    
                                                </div>
                                            </li>
                                            
                                            
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Why CRYO Bank</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="Cryo1.php">Cryo precipitate Banking</a>
                                                    <a class="dropdown-item" href="Cryo2.php">The benefit of banking</a>
                                                    <a class="dropdown-item" href="Cryo3.php">processing Technology</a>
                                                    
                                                </div>
                                            </li>
                                            
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Test directory</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="tests.php">Common Tests</a>
                                                    <a class="dropdown-item" href="alltests.php">All Tests</a>
                                                    
                                                    
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">prepare for test</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="new/prepare-test.php">Serology</a>
                                                    <a class="dropdown-item"  href="new/prepare-test2.php">Microbiology</a>
                                                    
                                                    
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Contact us</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="contact.php">Send Message</a>
                                                    <a class="dropdown-item" href="feedback/feedback.php">Send Feedback</a>
                                                    
                                                    
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link " href="profile.php" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-expanded="false"> <?php
                                                    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]!='')
                                                    {
                                                    echo '<h6>'.$_SESSION["logged_in"].'</h6>';
                                                    
                                                } ?></a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="profile.php">Visit Profile</a>
                                                    <a class="dropdown-item" href="logout.php">Logout</a>
                                                    
                                                    
                                                </div>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <?php
                                                if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]!=''){ // I use false condition
                                                echo '<a href="logout.php"><button class="btn btn-danger">Sign out</button></a>';
                                                }else{
                                                echo '<a href="log/index.php"><button class="btn btn-primary">Sign in</button></a>';
                                                }
                                                ?>
                                            </li>
                                            
                                        </ul>
                                        
                                        
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(img/bg-img/hero3.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <!-- Title -->
                            <h3 class="breadcumb-title"> <?php
                            if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]!='')
                            {
                            echo $_SESSION["logged_in"];
                            
                            } ?></h3>
                            <!-- Breadcumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active"  aria-current="page"><a href="logout.php">Logout</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="medica-services-area section_padding_100">
            <div class="container">
                
                
                
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            
                            <div class="card-body">
                                <h4 class="card-title"><a><h4>For Emergency situation</h4></a></h4>
                                <p class="card-title">Contact us</p>
                            
                                <p class="card-text">* 033 5625 512</p>
                                
                                 <p class="card-text">* 033 222 92 64</p>
                         
                                <p class="card-text">(Operate all 7 days)</p>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><a><h4>Consent Agreement for collect blood samples</h4></a></h4>
                                  <li><a href="collect.docx" download style="color: orange">Download the Word Document</a></li>
                                  <p class="card-text">* Please Fill Carefully<br>(Signature is Compulsury)</p>
                                   <p class="card-text">* E-mail to "medicaretec@yahoo.com"</p>
                                   <p class="card-text">* You will Receive the sample immediatly </p>
                                <br>
                                <br>
                               
                            </div>
                        </div>
                    </div>
                 </div>
                      
                
            </section>
            <?php
            include("footer.php");
            ?>