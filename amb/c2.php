
<?php  
session_start();


if(isset($_SESSION['amb_disable_2']))
     {
        unset($_SESSION["amb_disable_2"]);
          $_SESSION['amb_enable_2']="Your ambulance 2 is enable";
        header('Location:../ambulance_check1.php');
     }

 elseif(isset($_SESSION['username']))
     {
        $_SESSION['amb_disable_2']="Your ambulance 2 is disable";
        header('Location:../ambulance_check1.php');
         unset($_SESSION["amb_enable_2"]);
     }




?>