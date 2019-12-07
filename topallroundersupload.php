 <?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');

      ?>


<div class="modal fade" id="momentpostupload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">upload Medical Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php"  method="POST" enctype="multipart/form-data">
      <div class="modal-body">

      	<div class="form-group">
      		<label>User id</label>
      		<input type="text" name="heading" class="form-control" placeholder="Enter Description" >
        </div> 
            <div class="form-group">
            <label>Report</label>
            <br>
       <input type="file" name="image" id="image" /> 
           </div>
      	

      	 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="topallrounderspostuploadbtn" id="postuploadbtn" value="postuploadbtn" >Save changes</button>
      </div>
      </form>
      </div>
  </div>
</div>
	<div class="card shadow-mb-4">
		<div class="card-header py-3 ">
			<h6 class="m-0 front-weight-bolt text-primary">Medical Reports
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#momentpostupload">
  Add Report
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
     $query = "SELECT * FROM topallrounderspost";
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
         <th scope="col">Report</th>
     
      
   
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
       <td><?php echo $row['name']; ?>  </td>
    <td><?php echo $row['category']; ?>  </td>
    <td><?php echo $row['place']; ?>  </td>
    <td><?php echo $row['innings']; ?>  </td>
    <td><?php echo $row['totalscore']; ?>  </td>
    <td><?php echo $row['highscore']; ?>  </td>
    <td><?php echo $row['average']; ?>  </td>
    <td><?php echo $row['rate']; ?>  </td>

                <td>
            <form action="topallroundersedit.php" method="POST">
              <input type="hidden" name="edit_id" value="<?php echo $row['id'];   ?>">
           
            <button type="submit" name="upcomingeventspost_edit_btn" class="btn btn-success">EDIT</button> 
            </form>
          </td>
          <td>
          <form action="code.php" method="POST">
            <input type="hidden" name="delet_id"  value="<?php echo $row['id'];   ?>">
           <button type="submit" name="topallrounderspost_deletbtn" class="btn btn-danger">DELETE</button> 
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
  