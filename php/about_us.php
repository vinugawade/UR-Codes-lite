<?php
// ******************required Checks******************
if(@$_SESSION['logged_user']){
 $username = $_SESSION['logged_user'];
 $class = "visible";
 $href = "./logout.php";
 $text = "<i class='fa fa-sign-in' aria-hidden='true'></i>&nbsp;Log-Out";

}else{
  $class = "invisible";
$href = "./login.php";
 $text = "<i class='fa fa-sign-in' aria-hidden='true'></i>&nbsp;Log-In";
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
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<style>
    body {
     height: 100%;
     background: #fec107;
 }
.row.heading h2 {
    color: #fff;
    font-size: 52.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;
    margin: 0 0 40px;
    padding-bottom: 20px;
    text-transform: uppercase;
}
ul{
  margin:0;
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}
.padding-lg {
	display: block;
	padding-top: 60px;
	padding-bottom: 60px;
}
.practice-area.padding-lg {
    padding-bottom: 55px;
    padding-top: 55px;
}
.practice-area .inner{
     border:1px solid #999999;
	 text-align:center;
	 margin-bottom:28px;
	 padding:40px 25px;
}
.our-webcoderskull .cnt-block:hover {
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border: 0;
}
.practice-area .inner h3{
    color:#3c3c3c;
	font-size:24px;
	font-weight:500;
	font-family: 'Poppins', sans-serif;
	padding: 10px 0;
}
.practice-area .inner p{
    font-size:14px;
	line-height:22px;
	font-weight:400;
}
.practice-area .inner img{
	display:inline-block;
}

.our-webcoderskull .cnt-block{
   float:left;
   width:100%;
   background:#fff;
   padding:30px 20px;
   text-align:center;
   border:2px solid #d5d5d5;
   margin: 0 0 28px;
}
.our-webcoderskull .cnt-block figure{
   width:148px;
   height:148px;
   border-radius:100%;
   display:inline-block;
   margin-bottom: 15px;
}
.our-webcoderskull .cnt-block img{
   width:148px;
   height:148px;
   border-radius:100%;
}
.our-webcoderskull .cnt-block h3{
   color:#2a2a2a;
   font-size:20px;
   font-weight:500;
   padding:6px 0;
   text-transform:uppercase;
}
.our-webcoderskull .cnt-block h3 a{
  text-decoration:none;
	color:#2a2a2a;
}
.our-webcoderskull .cnt-block h3 a:hover{
	color:#337ab7;
}
.our-webcoderskull .cnt-block p{
   color:#2a2a2a;
   font-size:13px;
   line-height:20px;
   font-weight:400;
}
.our-webcoderskull .cnt-block .follow-us{
	margin:20px 0 0;
}
.our-webcoderskull .cnt-block .follow-us li{
    display:inline-block;
	width:auto;
	margin:0 5px;
}
.our-webcoderskull .cnt-block .follow-us li .fab{
   font-size:24px;
   color:#767676;
}
.our-webcoderskull .cnt-block .follow-us li .fab:hover{
   color:#025a8e;
}
.btn-login{
    border-radius:8px;
}
</style>
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
        <a class="nav-link" href="./about_us.php"><i class="far fa-address-card"></i>&nbsp;About Us</a>
      </li>

    </ul>

<!--   Show this only lg screens and up   -->
    <a class="navbar-brand d-none d-lg-block ml-5" href="../index.php"><img src="../images/logo.png" width="30" height="30" alt="" loading="lazy">
   </a>

    <ul class="navbar-nav">

        <div class="<?php echo $class ?>">
        <li class="nav-item mt-2"><span><?php echo "Hii..".@$username; ?></span>

      </li>
      </div>

      <li class="nav-item">
        <a class="nav-link visible btn-login btn btn-danger text-white" href="<?php echo $href ?>" ><?php echo $text ?></a>
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
              <li><a href="https://www.facebook.com/profile.php?id=100015980792342" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/vinugawadeav/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/vinay-gawade-7716b01b1/" target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=+91 77418 91658&text=hi.&source=&data=&app_absent=" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
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
              <li><a href="#" ><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=+91 93078 83798&text=hi.&source=&data=&app_absent=" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="../images/yt.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="#">Yadnesh  </a></h3>
            <p> Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="https://www.facebook.com/yadnesh.tendolkar" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/yadneshtendolkar/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#" ><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=+91 83291 16314&text=hi.&source=&data=&app_absent=" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
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
              <li><a target="_blank" href=" https://wa.me/9403634351/?text=hi."><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
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
