<?php
session_start();


if(isset($_SESSION['amb_disable_1']))
{

    $_SESSION['unavalable']="we cant set ambulance at this moment  , please try again later";
        header('location:../no-ambulance.php');
}
else
{ 
	if (isset($_POST['book1'])) {
   
          $_SESSION['destination']=$_POST['destination'];
		  $_SESSION['time']=$_POST['time'];
		  $_SESSION['date']=$_POST['date'];

		//  echo $_SESSION['destination'];  echo "..............";
	//echo  $_SESSION['time']; echo "..............";
	//echo  $_SESSION['date']=$_POST['date']; echo "..............";
		 header('location:../new/cryo-register.php');
         
 
            
             

   
       

      } 
		
	
	
   
}



?>