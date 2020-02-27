<?php  
session_start();


if(isset($_SESSION['amb_disable_3']))
     {
        unset($_SESSION["amb_disable_3"]);
          $_SESSION['amb_enable_3']="Your ambulance 3 is enable";
        header('Location:../ambulance_check1.php');
     }

 elseif(isset($_SESSION['username']))
     {
        $_SESSION['amb_disable_3']="Your ambulance 3 is disable";
        header('Location:../ambulance_check1.php');
         unset($_SESSION["amb_enable_3"]);
     }




?>