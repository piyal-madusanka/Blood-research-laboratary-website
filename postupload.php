
    <?php

include('includes/header.php');
include('includes/navbar.php');

      ?>



	<div class="card shadow-mb-4">
		<div class="card-header py-3 ">
			<h6 class="m-0 front-weight-bolt text-primary">User Section

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
     $query = "SELECT * FROM frontpost";
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
         <th scope="col">Requested test</th>
         <th scope="col">e-mail</th>
         <th scope="col">status</th>
         <th scope="col">allergies</th>
         <th scope="col">weight</th>
         <th scope="col">Blood group</th>

  

      
      <th scope="col">EDIT</th>
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
      
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
       <td> </td>
          <td> </td>
      <td> </td>
      <td> </td>
       <td> </td>
          <td> </td>
             <td> </td>
     

                <td>
            <form action="frontpostedit.php" method="POST">
              <input type="hidden" name="edit_id" value="<?php echo $row['id'];   ?>">
              <input type="hidden" name="edit_heading" value="<?php echo $row['heading'];   ?>">
               <input type="hidden" name="edit_post" value="<?php echo $row['post'];   ?>">
               
                 <input type="hidden" name="edit_post" value="<?php echo  '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="100" width="100"/';   ?>">
              <input type="hidden" name="edit_link" value="<?php echo $row['link'];   ?>">

                        </form>
          </td>
          <td>
          <form action="code.php" method="POST">
            <input type="hidden" name="delet_id"  value="<?php echo $row['id'];   ?>">
           <button type="submit" name="frontpost_deletbtn" class="btn btn-danger">DELETE</button> 
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
  