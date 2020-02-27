
<?php

include("headerh.php");

  ?>
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
                                <li class="breadcrumb-item active"  aria-current="page"><a href="logout.php">logout</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="medica-services-area section_padding_100">
        <div class="container">
            <h2>Cryo presevation</h2>
            <div class="row">
                
               <div class="col-12 col-md-5 col-lg-5">
                    <div class="all-services">
                        <div class="row">
                        <div class="card text-white bg-info mb-3" style="max-width: 100rem; width: 100rem">
                    <div class="medica-department-card">
                            <h5></h5>
                            <ul class="department-menu">
                          <li><a href="new/testpay.php"><h4 style="color: white;">Initial Test Payment</h4></a></li>
                            
                            
                               
                            </ul>
                        </div>
                       </div>     
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2 col-lg-2">
                    
                </div>

                  <div class="col-12 col-md-5 col-lg-5">
                    <div class="all-services">
                        <div class="row">
                        <div class="card text-white bg-info mb-3" style="max-width: 100rem; width: 100rem">
                    <div class="medica-department-card">
                            <h5></h5>
                            <ul class="department-menu">
                          <li><a href="new/storagepay.php"><h4 style="color: white;">Storage Payment</h4></a></li>
                          
                            
                               
                            </ul>
                        </div>
                       </div>
                            
                       
                            
                        </div>
                    </div>
                </div>

                    
               
                 
                      
             
                 
                    
            

                 
            </div>
        </div>
    </section>

    <?php
    include("footer.php");


     ?>
