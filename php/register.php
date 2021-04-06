<?php
// ******************required imports******************
require 'connect.php';

$name = $_POST['full_name'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = md5($_POST['password']); //MD5 Encryption

// // ******************Verfy User is Created Or Not******************
$q = "SELECT * FROM `user_registration` WHERE `email`= '{$email}'";
$sql = $conn->query($q);

if ($sql->num_rows > 0) {

    echo "<script>alert('Users Email Already Registered Try Different Email.')</script>";
    echo "<script> window.location.assign('login.php'); </script>";

} else {

// ******************Here Making Sure That Password Is Unique******************

    $q = "SELECT * FROM `user_registration` WHERE `password`='{$password}'";
    $sql = $conn->query($q);
    if ($sql->num_rows > 0) {

        echo "<script>alert('Password Already Registered Try Again.')</script>";
        echo "<script> window.location.assign('login.php'); </script>";

    } else {

// ******************Creation Of New  UserIn DB******************
        $sql = "INSERT INTO `user_registration` (`name`, `email`, `phone_no`, `password`) VALUES ('{$name}', '{$email}', '{$number}', '{$password}');";
        if ($conn->query($sql) === true) {

            echo "<script>alert('User Registered Now You Can LogIn.')</script>";
            echo "<script> window.location.assign('login.php'); </script>";

        } else {

            echo "<script>alert('Some Error is Occurred Please Try Again.')</script>";
            echo "<script> window.location.assign('login.php'); </script>";

        }
    }
}
$conn->close();
