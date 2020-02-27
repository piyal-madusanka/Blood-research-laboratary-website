

    <?php
 include('security.php');
include('includes/header.php');
include('includes/navbar.php');

      ?>



<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Sample Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
      <div class="modal-body">

      	<div class="form-group">
      		<label>user name</label>
      		<input type="text" name="username" class="form-control" placeholder="Enter user name" >
      	</div>
      	 	<div class="form-group">
      		<label>Sample Id</label>
      		<input type="text" name="id" class="form-control" placeholder="Enter id" >
      	</div>
      	 	<div class="form-group">
      		<label>Container</label>
      		<input type="text" name="container" class="form-control" placeholder="add sample container" >
      	</div>
      	 	<div class="form-group">
      		<label>Remaining Quantity</label>
      		<input type="text" name="remaining" class="form-control" placeholder="add remaining quantity" >
      	</div>
            <div class="form-group">
          <label>Tecnician Id</label>
          <input type="text" name="tecnician" class="form-control" placeholder="add tecnician id" >
        </div>
         <div class="form-group">
          <label>Sample Due Date</label>
          <input type="date" name="date" class="form-control" placeholder="add sample due date" >
        </div>
          <div class="form-group">
          <label>Recently Used</label>
          <input type="text" name="recent" class="form-control" placeholder="add recently used status" >
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="statusregisterbtn">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="container-fluid">
   <nav class="navbar navbar-expand  topbar mb-4 static-top ">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
             

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-800 medium">
                           <?php echo  $_SESSION['username'];  ?>
                </span>
                <img class="img-profile rounded-circle" src="img/admin.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
	<div class="card shadow-mb-4">
		<div class="card-header py-3 ">
			<h6 class="m-0 front-weight-bolt text-primary">Sample Status
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
 Add Sample Status
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
     $query = "SELECT * FROM sample_status";
     $query_run = mysqli_query($conn,$query);

      ?>
  		<table class="table table-bodered" id="datatable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Sample Id</th>
      <th scope="col">Container</th>
       <th scope="col">username</th>
      <th scope="col">Remaining Quantity</th>
      <th scope="col">Tecnician Id</th>
      <th scope="col">Sample Due Date</th>
      <th scope="col">Recently Used</th>
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
      
      <td><?php echo $row['id']; ?>  </td>

      <td><?php echo $row['container']; ?>  </td>
       <td><?php echo $row['username']; ?>  </td>
      <td><?php echo $row['remaining'];    ?>  </td>
      <td><?php echo $row['tecnician']; ?>  </td>
      <td><?php echo $row['sample_date']; ?>  </td>
      <td><?php echo $row['recently']; ?>  </td>
          <td>
            <form action="statusedit.php" method="POST">
              <input type="hidden" name="edit_id" value="<?php echo $row['id'];   ?>">
            <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button> 
            </form>
          </td>
          <td>
          <form action="code.php" method="POST">
            <input type="hidden" name="delet_id"  value="<?php echo $row['id'];   ?>">
           <button type="submit" name="deletbtn" class="btn btn-danger">DELETE</button> 
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



</div>



<?php
include('includes/script.php');
include('includes/footer.php');

  ?>
  