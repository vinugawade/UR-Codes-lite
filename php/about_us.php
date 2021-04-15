<?php
include("./includes/check_user.php");
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
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" type="text/css" href="../css/about_us.css" />
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!--  Show this only on mobile to medium screens  -->
    <a class="navbar-brand d-lg-none" href="../index.php"><img src="../images/logo.png" width="30" height="30" alt="logo" loading="lazy">
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

      </ul>

      <!--   Show this only lg screens and up   -->
      <a class="navbar-brand d-none d-lg-block ml-5" href="../index.php"><img src="../images/logo.png" width="30" height="30" alt="" loading="lazy">
      </a>

      <ul class="navbar-nav">

        <div class="<?php echo $class ?>">
          <li class="nav-item mt-2"><span><?php echo "Hii.." . @$username; ?></span>

          </li>
        </div>

        <li class="nav-item">
          <a class="nav-link visible btn-login btn btn-danger text-white" href="<?php echo $href ?>"><?php echo $text ?></a>
        </li>

      </ul>
    </div>
  </nav>

  <section class="our-webcoderskull padding-lg">
    <div class="container">
      <div class="row heading heading-icon">
        <h2>Our Team</h2>
      </div>
      <ul class="row">
        <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="../images/vg.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="#">Vinay </a></h3>
            <p>Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="https://www.facebook.com/vikram.gawade/" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/vinugawadevr" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/vinay-gawade-7716b01b1/" target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=+917741891658&text=hi.&source=&data=&app_absent=" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </li>
        <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="../images/v_s.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="#">Vaibhav S. </a></h3>
            <p>Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="https://www.facebook.com/profile.php?id=100008588832905" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/army_vaibhav18/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=+919307883798&text=hi.&source=&data=&app_absent=" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </li>
        <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="../images/yt.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="#">Yadnesh </a></h3>
            <p> Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="https://www.facebook.com/yadnesh.tendolkar" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/yadneshtendolkar/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=+918329116314&text=hi.&source=&data=&app_absent=" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </li>
        <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="../images/vj.JPEG" class="img-responsive" alt=""></figure>
            <h3><a href="#">Vaibhav J. </a></h3>
            <p>Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100052883003697"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
              <li><a target="_blank" href="https://www.instagram.com/vaibhav_rj_23/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
              <li><a target="_blank" href="https://www.linkedin.com/in/vaibhav-jadhav-11029a1a1/"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a target="_blank" href=" https://wa.me/+919403634351/?text=hi."><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </section>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>