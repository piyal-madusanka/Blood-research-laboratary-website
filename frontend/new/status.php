<?php 
session_start();
 include_once'../../includes/connection.php';

echo "<script>
alert('your sample will expire soon');

</script>";
include("header2h.php");
 ?>




<hr style="   border-top: 3px double #8c8b8b;">
  <div></div>
  <br>
  <br>
  <br>
  <br>
  <br>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
        <div class="card" style="width: 70rem;">
  <div class="card-body">
    <h2 class="card-title">Sample Staus</h2>
    <h3 class="card-subtitle mb-2 text-muted"></h3>
    <p class="card-text">


         <div class="table-responsive">
      <?php
      $username1=$_SESSION["logged_in"];
     include_once'../../includes/connection.php';

     $query = "SELECT * FROM sample_status WHERE username='$username1'";
     $query_run = mysqli_query($conn,$query);

      ?>
      <table class="table table-bodered" id="datatable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col" style="color:black " >Sample Id</th>
      <th scope="col" style="color:black ">Container</th>
      <th scope="col" style="color:black ">Remaining Quantity</th>
      <th scope="col" style="color:black ">Tecnician Id</th>
      <th scope="col" style="color:black ">Sample Due Date</th>
      <th scope="col"  style="color:black ">Recently Used</th>
     
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
      
      <td  style="color:black "><?php echo $row['id']; ?>  </td>
      <td  style="color:black "><?php echo $row['container']; ?>  </td>
      <td  style="color:black "><?php echo $row['remaining'];    ?>  </td>
      <td  style="color:black "><?php echo $row['tecnician']; ?>  </td>
      <td  style="color:black "><?php echo $row['sample_date']; ?>  </td>
      <td  style="color:black "><?php echo $row['recently']; ?>  </td>
     
     
      
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







    </p>
      <a class="btn btn-primary" href="../index.php">Ok</a>
  </div>
</div>

      </div>
    </div>
  </div>

</body>




  <?php
include("footer2.php");
  ?>   