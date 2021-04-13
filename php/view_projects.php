<?php
include("./includes/check_user.php");
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
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/all_view_filename.css">
</head>

<body>
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
          <a class="nav-link active" href="./index.php"><i class="fa fa-long-arrow-left"></i> Back <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php"><i class="fas fa-home"></i>&nbsp;Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./about_us.php"><i class="far fa-address-card"></i>&nbsp;About Us</a>
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
          <a class="nav-link visible btn-login btn btn-danger text-white" href="<?php echo $href ?>"><?php echo $text ?></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="text-center text-bold text-uppercase pt-3">
  <h4>Select Subject</h4>
</div>
  <div class="row py-3 mx-2">

    <?php
    //  ******************Fetching The Uploaded Projects******************
    $q = "SELECT `project_sub` FROM `uploaded_project` GROUP BY `project_sub`";
    $result = $conn->query($q);
    $count = $result->num_rows;
    if ($result->num_rows == 0) {
      echo "<script>alert('No Projects Uploaded Yet.');</script>";
      echo "<script> window.location.assign('./index.php'); </script>";
    } else {
      while ($row = $result->fetch_assoc()) {
        echo '
      <div class="col-lg-6 col-sm-12 py-2 text-center">
      <div style="min-height:60px; min-width:50%;" >
      <form action="./view.php" method="POST">
      <button type="submit" name="input_sub" class="card col-lg-12 col-sm-12 py-2 px-5" value=' . $row["project_sub"] . '><h4><i class="fas fa-book"></i>&nbsp; ' . $row["project_sub"] . '</h4></button>
      </form>
      </div>
      </div>
      ';
      }
    }

    ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>