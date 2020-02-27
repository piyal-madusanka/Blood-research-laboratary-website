 

<?php  
session_start();


if(isset($_SESSION['amb_disable_1']))
     {
        unset($_SESSION["amb_disable_1"]);
          $_SESSION['amb_enable_1']="Your ambulance 1 is enable";
        header('Location:../ambulance_check1.php');
     }

 elseif(isset($_SESSION['username']))
     {
        $_SESSION['amb_disable_1']="Your ambulance 1 is disable";
        header('Location:../ambulance_check1.php');
         unset($_SESSION["amb_enable_1"]);
     }




?>