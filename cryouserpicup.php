 <?php

 include('security.php');
include('includes/header.php');
include('includes/navbar.php');

      ?>



	<div class="card shadow-mb-4">
		<div class="card-header py-3 ">
			<h6 class="m-0 front-weight-bolt text-primary">Cryo test users

			</h6>
			
		</div>
  <div class="card-body">
    <?php 
     if(isset($_SESSION['success']) && $_SESSION['success']!=''){
      
        echo '<h2>'.$_SESSION['success'].'</h2>';
        unset($_SESSION['success']);

      }
      if(isset($_SESSION['status']) && $_SESSION['status']!=''){
      
        echo '<h2 class"bg-info">'.$_SESSION['status'].'</h2>';
        unset($_SESSION['status']);  
     } 



     ?>
  	<div class="table-responsive">
      <?php
     include_once'includes/connection.php';
     $query = "SELECT * FROM cryo_presev_user";
     $query_run = mysqli_query($conn,$query);

      ?>
  		<table class="table table-bodered" id="datatable" width="100%" cellspacing="0">
  <thead>
    <tr>
         <th scope="col">Id</th>
         <th scope="col">First name</th>
         <th scope="col">Last name</th>
         <th scope="col">Destination</th>
         <th scope="col">Date</th>
         <th scope="col">time</th>
         
    </tr>
  </thead>
  <tbody>
    <?php
 
    if(mysqli_num_rows($query_run )>0)
    {
      while ($row=mysqli_fetch_assoc($query_run )) 
      {
      
       ?>
      
    <tr>
      
      <td><?php echo  $row['id'];  ?> </td>
      <td><?php echo  $row['first_name'];  ?> </td>
      <td><?php echo  $row['last_name'];  ?> </td>
      <td><?php echo  $row['destination'];  ?> </td>
      <td><?php echo  $row['date'];  ?> </td>
      <td><?php echo  $row['time'];  ?> </td>
 
    </tr>
       <?php  
     }
    
   }
   else{
    echo "No record found";
   }


      ?>
   
  </tbody>
</table>
  		
  	</div>
   
  </div>
</div>

<?php
include('includes/script.php');
include('includes/footer.php');

  ?>
  