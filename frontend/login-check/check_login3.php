<?php
session_start();

if(isset($_SESSION['logged_in']))
{
    header('location:../new/online-report.php');
}
else
{
	$_SESSION['invalid3']="you need a user account for this process";
    header('location:../log/index.php');
}

?>