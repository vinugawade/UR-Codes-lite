<?php
// ******************required imports******************
require './includes/config_connection.php';
session_start();

// ******************Session Check******************
if(@$_SESSION['logged_user']){
 $username = $_SESSION['logged_user'];
 $class = "visible";
 $href = "./logout.php";
 $text = "<i class='fa fa-sign-out' aria-hidden='true'></i>&nbsp;Log-Out";

}else{
  $username = "Guest User&nbsp;";
  $class = "visible";
  $href = "./login.php";
  $text = "<i class='fa fa-sign-in' aria-hidden='true'></i>&nbsp;Log-In";
}
?>