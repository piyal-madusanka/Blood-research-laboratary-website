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
      <form  name="form" method="post" enctype="multipart/form-data" >
      <div class="modal-body">
            <div class="form-group">
            <label>Add Report</label>
            <br>
       <input  type="file" name="my_file"  /> 
           </div>
      	
           
      	 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit"  name="submit" value="Upload"/>
 
       
      </div>
      </form>
      
      </div>
  </div>
</div>
<?php
//upload files
if (($_FILES['my_file']['name']!="")){
// Where the file is going to be stored
  $target_dir = "frontend/new/upload/";
  $file = $_FILES['my_file']['name'];
  $path = pathinfo($file);
  $filename = $path['filename'];
  $ext = $path['extension'];
  $temp_name = $_FILES['my_file']['tmp_name'];
  $path_filename_ext = $target_dir.$filename.".".$ext;
 
// Check if file already exists
if (file_exists($path_filename_ext)) {
 //echo "Sorry, file already exists.";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);
 echo "Congratulations! File Uploaded Successfully.";
 }
}
?>
	<div class="card shadow-mb-4">
		<div class="card-header py-3 ">
			<h6 class="m-0 front-weight-bolt text-primary">Medical Reports
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#momentpostupload">
  Add Report
</button>
			</h6>
			
		</div>

</div>

<?php
include('includes/script.php');
include('includes/footer.php');

  ?>
  