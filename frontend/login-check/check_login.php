<?php
session_start();

if(isset($_SESSION['logged_in']))
{
    header('location:../ambulance2.php');
}
else
{
	$_SESSION['invalid1']="you need a user account for this process";
    header('location:../log/index.php');
}

?>