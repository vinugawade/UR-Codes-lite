<?php
// ******************required imports******************
require 'connect.php';
session_start();

// ******************Session Check******************
if(@$_SESSION['logged_user']){
 $username = $_SESSION['logged_user'];
 $class = "visible";
 $href = "logout.php";
 $text = "<i class='fa fa-sign-out' aria-hidden='true'></i>&nbsp;Log-Out";

}else{
  $username = "Guest User&nbsp;";
  $class = "visible";
$href = "login.php";
 $text = "<i class='fa fa-sign-in' aria-hidden='true'></i>&nbsp;Log-In";
}

// if(@$_SESSION['logged_user']){
//  $username = $_SESSION['logged_user'];

// }else{

//     echo "<script>alert('Please Log-In First.')</script>";
//     echo "<script> window.location.assign('login.php'); </script>";
//   }

?>


<!DOCTYPE html>
<html>
<head>
  <title>UR-Codes lite</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <style>
body {
     height: 100%;
     background: #fec107;
 }
  .btn-login{
    border-radius: 8px;
    }
    </style>
  </head>
  <body>
    <!-- <form action="view.php" method="POST"> -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <!--  Show this only on mobile to medium screens  -->
        <a class="navbar-brand d-lg-none" href="../index.php"><img src="../images/logo.png" width="30" height="30" alt="" loading="lazy">
          UR-CODES lite</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!--  Use flexbox utility classes to change how the child elements are justified  -->
          <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="home.php"><i class="fa fa-long-arrow-left"></i> Back <span class="sr-only">(current)</span></a>
              </li>
 <li class="nav-item">
        <a class="nav-link" href="about_us.php"><i class="far fa-address-card"></i>&nbsp;About Us</a>
      </li>
            </ul>
            <!--   Show this only lg screens and up   -->
            <a class="navbar-brand d-none d-lg-block ml-5" href="../index.php"><img src="../images/logo.png" width="30" height="30" alt="" loading="lazy">
            </a>
            <ul class="navbar-nav">

        <div class="<?php echo $class ?>">
        <li class="nav-item mt-2"><span>Hii..</span>
        <?php echo $username; ?>
      </li>
      </div>



      <li class="nav-item">
        <a class="nav-link visible btn-login btn btn-danger text-white" href="<?php echo $href ?>" ><?php echo $text ?></a>
      </li>
            </ul>
          </div>
        </nav>
        <div class="container">
          <div class="row py-5 px-3">


          <?php
//  ******************Fetching The Uploaded Projects******************
 $q="SELECT `project_sub` FROM `uploaded_project` GROUP BY `project_sub`";
 $result = $conn->query($q);
 $count=$result->num_rows;
 if ($result->num_rows == 0)
 {
   echo"<script>alert('No Projects Uploaded Yet.');</script>";
   echo "<script> window.location.assign('./Home.php'); </script>";
 }else{
     while ($row = $result->fetch_assoc())
     {
      echo'
      <div class="col-lg-6 col-sm-12 py-2 text-center">
      <div  style="height:60px; width:250px:" >
      <form action="./view.php" method="POST">
      <button type="submit" name="input_sub" class="card col-lg-12 col-sm-12 py-2 px-5" value='.$row["project_sub"].'>'.$row["project_sub"].'</button>
      </form>
      </div>
      </div>
      ';

     }
 }

?>

<!--
            <div class="col-md-6 col-sm-12 col-lg-4 my-5 ">
              <div class="flip-card ">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="../images/html.jpg" alt="Avatar" style="width:300px;height:300px;">
                  </div>
                  <div class="flip-card-back ">
                    <h4 class="mt-5">To view <b>HTML</b> projects</h4>
                    <button type="submit" name="HTML" class="btn btn-primary btn-md py-2 px-3 mb-3 mt-3 mr-md-3 " >click here</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-12 col-lg-4 my-5 ">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="../images/c.jpg" alt="Avatar" style="width:300px;height:300px;">
                  </div>
                  <div class="flip-card-back ">
                    <h4 class="mt-5">To view <b>C</b> projects</h4>
                    <button type="submit" name="C" class="btn btn-primary btn-md py-2 px-3 mb-3 mt-3 mr-md-3 " >click here</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-12 col-lg-4 my-5 ">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="../images/c++.jpg" alt="Avatar" style="width:300px;height:300px;">
                  </div>
                  <div class="flip-card-back ">
                    <h4 class="mt-5">To view <b>C++</b> projects</h4>
                    <button type="submit" name="C++" class="btn btn-primary btn-md py-2 px-3 mb-3 mt-3 mr-md-3 " >click here</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-12 col-lg-4 my-5 ">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="../images/java.jpg" alt="Avatar" style="width:300px;height:300px;">
                  </div>
                  <div class="flip-card-back ">
                    <h4 class="mt-5">To view <b>JAVA</b> projects</h4>
                    <button type="submit" name="JAVA" class="btn btn-primary btn-md py-2 px-3 mb-3 mt-3 mr-md-3 " >click here</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-12 col-lg-4 my-5 ">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="../images/mysql.jpg" alt="Avatar" style="width:300px;height:300px;">
                  </div>
                  <div class="flip-card-back ">
                    <h4 class="mt-5">To view <b>SQL</b> projects</h4>
                    <button type="submit" name="SQL" class="btn btn-primary btn-md py-2 px-3 mb-3 mt-3 mr-md-3 " >click here</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-12 col-lg-4 my-5 ">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="../images/py.png" alt="Avatar" style="width:300px;height:300px;">
                  </div>
                  <div class="flip-card-back ">
                    <h4 class="mt-5">To view <b>PYTHON</b> projects</h4>
                    <button type="submit" name="PYTHON" class="btn btn-primary btn-md py-2 px-3 mb-3 mt-3 mr-md-3 " >click here</button>
                  </div>
                </div>
              </div>
            </div> -->
          </div>

        </div>

      <!-- </form> -->

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    </body>
    </html>
