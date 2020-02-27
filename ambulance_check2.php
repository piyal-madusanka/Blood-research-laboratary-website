
    <?php
  include('security.php');
include('includes/header.php');
include('includes/navbar.php');

      ?>

<br>
<br>
 <section class="medica-services-area section_padding_100">
        <div class="container">
            <div class="row">
       

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="all-services">
                        <div class="row">
                        <div class="card text-white bg-info mb-3" style="max-width: 100rem; width: 100rem">
                    <div class="medica-department-card">
                    	 <?php
                      if(isset($_SESSION['amb_disable_1']) && $_SESSION['amb_disable_1']!='')
                      {
      
                          echo '<h2 class"bg-info">'.$_SESSION['amb_disable_1'].'</h2>';
                           
                      } 
                      elseif(isset($_SESSION['amb_enable_1']) && $_SESSION['amb_enable_1']!='')
                      {
      
                          echo '<h2 class"bg-info">'.$_SESSION['amb_enable_1'].'</h2>';
                           
                      } 

                       if(isset($_SESSION['amb_disable_2']) && $_SESSION['amb_disable_2']!='')
                      {
      
                          echo '<h2 class"bg-info">'.$_SESSION['amb_disable_2'].'</h2>';
                           
                      } 
                      elseif(isset($_SESSION['amb_enable_2']) && $_SESSION['amb_enable_2']!='')
                      {
      
                          echo '<h2 class"bg-info">'.$_SESSION['amb_enable_2'].'</h2>';
                           
                      } 


                       if(isset($_SESSION['amb_disable_3']) && $_SESSION['amb_disable_3']!='')
                      {
      
                          echo '<h2 class"bg-info">'.$_SESSION['amb_disable_3'].'</h2>';
                           
                      } 
                      elseif(isset($_SESSION['amb_enable_3']) && $_SESSION['amb_enable_3']!='')
                      {
      
                          echo '<h2 class"bg-info">'.$_SESSION['amb_enable_3'].'</h2>';
                           
                      } 



                        ?>
                            <br>
                            <h5>Available ambulance time</h5>
                            <ul class="department-menu">

                           <form action="amb/c1.php" >
                           	  <li> <strong> Tuesday <8.00 am >---<5.00pm></strong> </li>
                           	  
                            	<button class="btn-danger" name="amb_dis_1" type="submit">enable / disable</button>
                           </form> 	
                         
                          <br>
                           <form action="amb/c2.php">
                           	  <li> <strong> Thursday <8.00 am >---<5.00pm></strong> </li>
                           	  
                            	<button class="btn-danger" name="amb_dis_2" type="submit">enable / disable</button>
                           </form>
                             <br>
                            <form action="amb/c3.php">
                           	  <li> <strong> Friday <8.00 am >---<5.00pm></strong> </li>
                           	  
                            	<button class="btn-danger" type="submit">enable / disable</button>
                           </form>

                            
                           
                            
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
include('includes/script.php');
include('includes/footer.php');

  ?>
