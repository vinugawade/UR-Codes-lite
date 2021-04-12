<?php
include("./includes/check_user.php");
if ($_SESSION['logged_user']) {
    session_destroy();
    echo "<script>window.location.assign('./login.php');</script>";
}else{
    session_destroy();
    echo "<script>window.location.assign('./login.php');</script>";
}
