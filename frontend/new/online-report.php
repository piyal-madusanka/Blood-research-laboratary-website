<!DOCTYPE html>
<html>
<head>
 <!-- Bootstrap CSS File -->

  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
    <link href="form.css" rel="stylesheet">
</head>


<body>

  
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Get your Lab Reports</h5>
            <form class="form-signin" name="form" method="get" enctype="multipart/form-data">
            
             <div class="form-label-group">
                <input type="text" id="inputPassword" class="form-control" placeholder="Password" type="text" name="my_file_dri" required>
                <label for="inputPassword">Passcode (Printed on bill)</label>
              </div>
             
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Download report</button>
              <hr class="my-4"> 
            </form>
            <?php
// download files
if(isset($_GET['my_file_dri']))
{
    $var_1 = $_GET['my_file_dri'];
    $dir = "upload/"; // uploaded folder name
    $file = $dir . $var_1.".pdf"; // set file type

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        echo "string";

    }else{
        echo "Sorry, file not exists.";
    }
}
?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>


