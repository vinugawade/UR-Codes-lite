<?php

include("./includes/check_user.php");
$email = $_POST['email'];
$newpassword = $_POST['newpassword'];
$repassword = $_POST['repassword'];
$key = $_POST['key'];

// // ******************Verification Of Email******************
$q = "SELECT * FROM user_registration WHERE email = '{$email}'";
$result = $conn->query($q);

if ($result->num_rows == 0) {

    echo "<script>alert('Invalid Email.')</script>;window.location.assign('./forgot.php'); </script>";

} elseif ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $user = $row["name"];
    }

}
if ($_POST['newpassword'] !== $_POST['repassword']) {

    echo '<script>alert("Password and Confirm password Doesn\'t match!");window.location.assign(\'./login.php\');</script>';

} else {

// ******************Update password******************
    $q = "SELECT * FROM user_registration WHERE email = '{$email}' AND `password`='{$key}'";
    $result=$conn->query($q);
        if ($result->num_rows == 1) {

        $newpassword = md5($_POST['newpassword']);
        $q = "UPDATE user_registration SET `password`='{$newpassword}' WHERE `email`='{$email}'";

        if ($conn->query($q) === true) {

            echo "<script>alert('\"{$user}\" Your Password Has Been Successfully Changed.');window.location.assign('./login.php'); </script>";

        } else {
            echo "<script>alert('Some Error is Occurred Please Try Again.');window.location.assign('./login.php'); </script>";
        }


        echo "<script>alert('\"{$user}\" Your Password Has Been Successfully Changed.');window.location.assign('./login.php'); </script>";

    } else {
        echo "<script>alert('Invalid Recovery Key.');window.location.assign('./login.php'); </script>";
    }

}
