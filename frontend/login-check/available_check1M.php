<?php
session_start();


if(isset($_SESSION['amb_disable_1']))
{

    $_SESSION['unavalable']="we cant set ambulance at this moment  , please try again later";
        header('location:../no-ambulance2.php');
}
else
{ 
	if (isset($_POST['bookM1'])) {
   
          $_SESSION['destinationM']=$_POST['destination'];
		  $_SESSION['timeM']=$_POST['time'];
		  $_SESSION['dateM']=$_POST['date'];


		 header('location:../new/register.php');
         
 
            
             

   
       

      } 
		
	
	
   
}



?>