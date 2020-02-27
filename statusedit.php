<?php
    session_start();
include('includes/header.php');
include('includes/navbar.php');

      ?>
<div class="container-fluid">
	<div class="card shadow mb-4">
	<div class="card-header py-3">
	<h6 class="m-0 front-weight-bold text-primary">Edit Admin Profile</h6>
	<div class="card-body">

    <?php 
    include_once'includes/connection.php';
    if(isset($_POST['edit_btn']))
    {
      $id =$_POST['edit_id'];
      $query="SELECT * FROM sample_status WHERE id='$id'";
      $query_run = mysqli_query($conn,  $query);

      foreach ($query_run as $row) 
      {
      	?>

    <form action="code.php" method="POST">
    	<input type="hidden" name="edit_id" value="<?php echo $row['id']  ?>">
 		<div class="form-group">	
      		<label>container</label>
      		<input type="text" name="edit_container" value="<?php echo $row['container'] ?>" class="form-control" placeholder="Enter container" >
      	</div>
      	 <div class="form-group">
      		<label>Remaining Quantity</label>
      		<input type="text" name="edit_remaining" value="<?php echo $row['remaining'] ?>" class="form-control" placeholder="Enter remining Quantity" >
      	</div>
      	 <div class="form-group">
      		<label>Tecnician Id</label>
      		<input type="text" name="edit_tecnician" value="<?php echo $row['tecnician'] ?>" class="form-control" placeholder="Enter tecnician id" >
      	</div>
         <div class="form-group">
          <label>Sample Due Date</label>
          <input type="date" name="edit_date" value="<?php echo $row['sample_date'] ?>" class="form-control" placeholder="Enter sample due date" >
        </div>
           <div class="form-group">
          <label>Recently used</label>
          <input type="text" name="edit_recently" value="<?php echo $row['recently'] ?>" class="form-control" placeholder="Enter recently used" >
        </div>
         <a href="addsamplestatus.php" class="btn btn-danger">Cancel</a>   
         <button class="btn btn-primary" type="submit" name="statusupdatebtn" >Update</button> 
         </form>
      	<?php
      	 	
  }
    }
    
    ?>


	</div>
</div>
</div>
</div>





      <?php
include('includes/script.php');
include('includes/footer.php');

  ?>
  