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
         <th scope="col">first name</th>
         <th scope="col">last name</th>
         <th scope="col">address</th>
         <th scope="col">phone number</th>
         <th scope="col">e-mail</th>
         <th scope="col">status</th>
         <th scope="col">allergies</th>
         <th scope="col">weight</th>
         <th scope="col">Blood group</th>
         <th scope="col">DELETE</th>
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
      <td><?php echo  $row['address'];  ?> </td>
      <td><?php echo  $row['phone'];  ?> </td>
      <td><?php echo  $row['email'];  ?> </td>
      <td><?php echo  $row['status'];  ?> </td>
      <td><?php echo  $row['alergies'];  ?> </td>
      <td><?php echo  $row['weight'];  ?> </td>
      <td><?php echo  $row['blood_group'];  ?> </td>
      <td>
          <form action="code.php" method="POST">
            <input type="hidden" name="delet_id"  value="<?php echo $row['id'];   ?>">
           <button type="submit" name="topbatsmenspost_deletbtn" class="btn btn-danger">DELETE</button> 
           </form>

      </td>
     
      
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
  