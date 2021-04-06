<?php
// ******************required imports******************
require 'connect.php';
header('Cache-Control: no cache');
session_cache_limiter('private_no_expire');
session_start();

// ******************Session Check******************
// if (!$_SESSION['logged_user']) {
//     echo "<script>alert('Please Log-In First.')</script>";
//     echo "<script> window.location.assign('login.php'); </script>";
// }

if (@$_SESSION['logged_user']) {
    $username = $_SESSION['logged_user'];
    $class = "visible";
    $href = "logout.php";
    $text = "<i class='fa fa-sign-out' aria-hidden='true'></i>&nbsp;Log-Out";

} else {
  $username = "Guest User&nbsp;";
    $class = "visible";
    $href = "login.php";
    $text = "<i class='fa fa-sign-in' aria-hidden='true'></i>&nbsp;Log-In";
}

?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Project Files</title>
  <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <style type="text/css">
body{
     height: 100%;
     background: #fec107;
}
.btn-login{
      border-radius:8px;
    }
a:hover{
      text-decoration-line:none;
}
  </style>
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
        <a class="nav-link active" href="view.php"><i class="fa fa-long-arrow-left"></i> Back <span class="sr-only">(current)</span></a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="about_us.php"><i class="far fa-address-card"></i>&nbsp;About Us</a>
      </li>
    </ul>
<!--   Show this only lg screens and up   -->
    <a class="navbar-brand d-none d-lg-block ml-5" href="../index.php"><img src="../images/logo.png" width="30" height="30" alt="" loading="lazy"></a>
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

<div class="container py-4">

<div class="row py-1">
<div class="col-lg-8 col-md-8 col-sm-12 py-5 mx-auto">
<div class="card">
<div class="card-header">
<h3>Explore UR-CODE Here</h3>
</div>
    <div class="card-body">
<?php
// ******************Get Project Name And Save In Session******************
@$click = $_POST['click'];
$sql = "SELECT * FROM `uploaded_project` WHERE `project_name`='{$click}'";
$result = $conn->query($sql);
$count = $result->num_rows;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $_SESSION['projectname'] = $row['project_code'];
        $_SESSION['filename'] = $row['project_name'];
        $_SESSION['download'] = $row['project_zip_directory'];
        $reportdir = $row['project_report_directory'];
        $projectname = str_replace("-", " ", $row['project_name']);
        $projectsub = $row['project_sub'];
        $dept = $row['department'];
        $projectuploader = $row['project_uploader'];
        $projectgroupmembers = $row['project_group_members'];
        $download_count = $row['download_count'];
        $reportname = $row['project_report'];
        $prodescription = $row['project_description'];
        $_SESSION['size'] = $project_size = $row['project_size'];
    }
}else{
  echo "<script> window.location.assign('view_projects.php'); </script>";
}

?>
<div class="row mt-3">
  <div class="col-sm-4">Project Name :</div>
  <div class="col-sm-8"><?php echo @$projectname; ?></div>
</div>
<div class="row mt-3">
  <div class="col-sm-4">Subject Name :</div>
  <div class="col-sm-8"><?php echo @$projectsub; ?></div>
</div>
<div class="row mt-3">
  <div class="col-sm-4">Department :</div>
  <div class="col-sm-8"><?php echo @$dept; ?></div>
</div>
<div class="row mt-3">
  <div class="col-sm-4">Uploaded By :</div>
  <div class="col-sm-8"><?php echo @$projectuploader; ?></div>
</div>

<div class="row mt-3">
  <div class="col-sm-4">Made By :</div>
  <div class="col-sm-8"><?php echo @$projectgroupmembers; ?></div>
</div>

<div class="row mt-3">
  <div class="col-sm-4">Project Report :</div>
  <div class="col-sm-8"><a href="<?php echo @$reportdir; ?>" target="_blank"><?php echo @$reportname; ?></a></div>
</div>
<div class="row mt-3">
  <div class="col-sm-4">Project Downloads :</div>
  <div class="col-sm-8"><?php echo @$download_count; ?></div>
</div>
<div class="row mt-3">
  <div class="col-sm-4">Project Size :</div>
  <div class="col-sm-8"><?php echo number_format(@$project_size / 1048576, 2) . ' MB'; ?></div>
</div>
<div class="row mt-3">
  <div class="col-sm-4">Description :</div>
  <div class="col-sm-8"><?php echo @$prodescription; ?></div>
</div>

<form action="download.php" method="POST">
        <button type="submit" class="btn btn-block btn-success" name="download-click"><i class="far fa-file-archive fa-lg"></i>&nbsp;Download</button>
    </form>

    <form action="delete.php" method="POST">
        <button type="submit" class="btn btn-block my-2 btn-danger" name="delete-click" id="delete" disabled=true><i class="fas fa-trash-alt fa-lg"></i>&nbsp;Delete</button>
        <?php
if (@$_SESSION['logged_user'] == @$projectuploader) {
echo"<script>document.getElementById('delete').disabled=false;</script>";
}else{
  echo"<script>document.getElementById('delete').innerHTML='<i class=\'fas fa-trash-alt fa-lg\'></i> Only Project Owner Can Delete This.';</script>";
}
?>
    </form>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>
