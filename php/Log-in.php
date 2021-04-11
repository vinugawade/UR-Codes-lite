<?php
// ******************required imports******************
require './connect.php';
session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);

//******************User verification******************
$q = "SELECT * FROM user_registration WHERE email = '{$email}' && password = '{$password}'";
$sql = $conn->query($q);

if ($sql->num_rows > 0) {

    $q = "SELECT * FROM user_registration WHERE email = '{$email}' && password = '{$password}'";
    $result = $conn->query($q);
    if ($result->num_rows > 0) {
// ******************Session Creation******************
        while ($row = $result->fetch_assoc()) {

            $_SESSION['logged_user'] = $row["name"];
            $_SESSION['logged_user_email'] = $row["email"];
            $_SESSION['logged_user_number'] = $row["phone_no"];

        }

        echo "<script>alert('Welcome \"{$_SESSION['logged_user']}\".')</script>";
        echo "<script> window.location.assign('./index.php'); </script>";

    } else {
        echo "<script>alert('Unable To Log-In.')</script>";
    }

} else {

    echo "<script>alert('Invalid Email/Password.')</script>";
    echo "<script> window.location.assign('./login.php'); </script>";

}
