<?php
session_start();
    unset($_SESSION["invalid1"]);
    unset($_SESSION["invalid2"]);
    unset($_SESSION["invalid3"]);
    unset($_SESSION["logged_in"]);
    unset($_SESSION["wrong"]);
    unset($_SESSION['destinationM']);
    unset($_SESSION['timeM']);
    unset($_SESSION['dateM']);
    unset($_SESSION['destination']);
    unset($_SESSION['time']);
    unset($_SESSION['date']);
    header("location:index.php");





  ?>