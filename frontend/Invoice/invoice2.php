<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>IMGT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Test invoice <small></small></h1>
</div>

<!-- Simple Invoice - START -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center">
                <i class="fa fa-search-plus pull-left icon"></i>
                <h2>Invoice for purchase </h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 pull-left">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Billing Details</div>
                        <div class="panel-body">
                            <strong>name: <h4><?php echo  $_SESSION['invoice_name2'];  ?></h4></strong><br>
                            <strong>test name  : <h4><?php echo  $_SESSION['test'];  ?>  </h4></strong><br>
                            <strong>Address:<h4><?php echo  $_SESSION['destinationM'];  ?></h4></strong><br>
                            
                          
                         
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Billing Details</div>
                        <div class="panel-body">
                            <strong>testing payment  : <h4>  1000 Rs </h4></strong> <br>
                             <strong>Requested pick up Date:<h4> <?php echo  $_SESSION['dateM'];  ?></h4></strong><br>
                             <strong>Requested pick up time:<h4><?php echo  $_SESSION['timeM'];  ?></h4></strong><br>

                            
                          
                        </div>
                    </div>
                </div>
                <div><button class="btn-primary" onclick="alert('you are successfully registered for this test')" style="float: right;" >Confirm</button>
                    
                </div> 
                <div><a href="../index.php"><button class="btn-info"> back to home</button></a> </div>
            </div>
        </div>
    </div>
  
</div>
<div>
    
</div>
<style>
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}
</style>

<!-- Simple Invoice - END -->

</div>

</body>
</html>