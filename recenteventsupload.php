<?php

include('includes/header.php');
include('includes/navbar.php');

      ?>


<div class="modal fade" id="postupload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">upload Recent event post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php"  method="POST" enctype="multipart/form-data">
      <div class="modal-body">

      	<div class="form-group">
      		<label>Post heading</label>
      		<input type="text" name="heading" class="form-control" placeholder="Enter Description" >
        </div> 
            <div class="form-group">
            <label>Add photo</label>
            <br>
       <input type="file" name="image" id="image" /> 
           </div>
      		<div class="form-group">
      		<label>Post Description</label>
          <textarea cols="5" type="text" name="post" class="form-control" placeholder="Enter Description"></textarea>
      		
      	</div>
        <div class="form-group">
          <label>Add video link</label>
          <input type="text" name="link" class="form-control" placeholder="Enter Description" >
        </div>


      	 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="recenteventspostuploadbtn" id="recenteventspostuploadbtn" value="recenteventspostuploadbtn" >Save changes</button>
      </div>
      </form>
     

  
    </div>
  </div>
</div>
	<div class="card shadow-mb-4">
		<div class="card-header py-3 ">
			<h6 class="m-0 front-weight-bolt text-primary">Recent events Postupload section
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#postupload">
  Add description
</button>
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
     $query = "SELECT * FROM recenteventspost";
     $query_run = mysqli_query($conn,$query);

      ?>
  		<table class="table table-bodered" id="datatable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Id</th>
       <th scope="col">Heading</th>
      <th scope="col">Description</th>
         <th scope="col">Image</th>
         <th scope="col">post link</th>

  

      
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
      
      <td><?php echo $row['id'];       ?>  </td>
      <td><?php echo $row['heading']; ?>  </td>
      <td><?php echo $row['post']; ?>  </td>
      <td><?php echo  '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="100" width="100"/>';     ?>  </td>
       <td><?php echo $row['link']; ?>  </td>

                <td>
            <form action="recenteventspostedit.php" method="POST">
              <input type="hidden" name="edit_id" value="<?php echo $row['id'];   ?>">
              <input type="hidden" name="edit_heading" value="<?php echo $row['heading'];   ?>">
               <input type="hidden" name="edit_post" value="<?php echo $row['post'];   ?>">
               
                 <input type="hidden" name="edit_post" value="<?php echo  '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="100" width="100"/';   ?>">
              <input type="hidden" name="edit_link" value="<?php echo $row['link'];   ?>">

            <button type="submit" name="post_edit_btn" class="btn btn-success">EDIT</button> 
            </form>
          </td>
          <td>
          <form action="code.php" method="POST">
            <input type="hidden" name="delet_id"  value="<?php echo $row['id'];   ?>">
           <button type="submit" name="recenteventspost_deletbtn" class="btn btn-danger">DELETE</button> 
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

  