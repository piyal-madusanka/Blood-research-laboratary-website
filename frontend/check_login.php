<?php
session_start();

if(isset($_SESSION['logged_in']))
{
    header('location:../new/cryo-register.php');
}
else
{
		$_SESSION["invalid1"]="log in to coninue";
        header('location:../log/index.php');
}
?>