<?php
session_start();

if(isset($_SESSION['amb_disable_3']))
{

    $_SESSION['unavalable']="we cant set ambulance at this moment  , please try again later";
        header('location:../no-ambulance.php');
}
else
{
   if (isset($_POST['book3'])) {
		 $_SESSION['destination']=$_POST['destination'];
		 $_SESSION['time']=$_POST['time'];
		$_SESSION['date']=$_POST['date'];
		   header('location:../new/cryo-register.php');
	} 
}

