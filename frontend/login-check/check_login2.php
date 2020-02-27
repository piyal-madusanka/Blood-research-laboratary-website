<?php
session_start();

if(isset($_SESSION['logged_in']))
{
    header('location:../ambulance.php');
}
else
{
	$_SESSION['invalid2']="you need a user account for this process";
	echo "<script>
alert('you need a user account for this process');
window.location.href='../log/index.php';
</script>";
  //  header('location:../log/index.php');
}

?>