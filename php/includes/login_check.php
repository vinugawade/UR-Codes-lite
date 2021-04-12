<?php
session_start();
require './includes/config_connection.php';
// ******************Session Check******************
if(@$_SESSION['logged_user']){
    $username = $_SESSION['logged_user'];
    $class = "visible";
    $href = "./logout.php";
    $text = "<i class='fa fa-sign-out' aria-hidden='true'></i>&nbsp;Log-Out";

   }else{
    echo "<script>alert('Login First To Upload Project.');window.location.assign('./login.php'); </script>";
   }
?>