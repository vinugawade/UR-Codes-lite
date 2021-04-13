<?php
header('Cache-Control: no cache');
session_cache_limiter('private_no_expire');
include("./includes/check_user.php");
// ******************Get input From 'view_projects.php' Page******************
if (isset($_POST['input_sub'])) {
  $_SESSION['subject'] = $_POST['input_sub'];
} else {
  unset($_SESSION['subject']);
  echo "<script>alert('Please Select Subject First');window.location.assign('./view_projects.php'); </script>";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>UR-Codes lite</title>
  <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" href="../css/all_view_filename.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand d-lg-none" href="../index.php"><img src="../images/logo.png" width="30" height="30" alt="" loading="lazy">
      UR-CODES lite</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./view_projects.php"><i class="fa fa-long-arrow-left"></i> Back <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php"><i class="fas fa-home"></i>&nbsp;Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./about_us.php"><i class="far fa-address-card"></i>&nbsp;About Us</a>
        </li>
      </ul>

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
  <h4>Select Project</h4>
</div>
  <div class="row py-3 mx-2">
    <?php
    //  ******************Fetching The Uploaded Projects******************
    $q = "SELECT * FROM `uploaded_project` WHERE project_sub='{$_SESSION['subject']}'";
    $result = $conn->query($q);
    $count = $result->num_rows;
    if ($result->num_rows == 0) {
      echo "<script>alert('No Projects Uploaded Yet.');</script>";
      echo "<script> window.location.assign('./view_projects.php'); </script>";
    } else {
      while ($row = $result->fetch_assoc()) {
        echo '
      <div class="col-lg-6 col-sm-12 py-2 text-center">
      <div style="min-height:60px; min-width:50%;" >
      <form action="./open_project.php" method="POST">
      <button class="card col-lg-12 col-sm-12 py-2 px-5" type="submit" name="click" value=' . str_replace(" ", "-", $row["project_name"]) . '><h4><i class="fas fa-folder"></i>&nbsp;' . $row["project_name"] . '</h4></button>
      </form>
      </div>
      </div>';
      }
    }

    ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>