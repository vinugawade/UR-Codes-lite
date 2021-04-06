<?php
// ******************required imports******************
session_start();

if (isset($_SESSION['logged_user'])) {

    session_destroy();
    echo "<script>location.href='login.php'</script>";
    
}
