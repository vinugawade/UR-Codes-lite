<?php
// ******************required imports******************
require 'connect.php';
session_start();

// ******************Session Check******************
$class = "invisible";

if(@$_SESSION['logged_user']){
 $username = $_SESSION['logged_user'];
 $class = "visible";
 $href = "logout.php";
 $text = "<i class='fa fa-sign-out' aria-hidden='true'></i>&nbsp;Log-Out";

}else{
$href = "login.php";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <style>
    body {
        height: 100%;
        background: #fec107;
    }

    h3 {
        text-align: justify;
    }

    .btn {
        border-radius: 25px;
    }

    .masthead {
        margin: 0;
        padding: 0;
    }
    .btn-login{
      border-radius:8px;
    }
    @media (min-width: 992px) {
        .masthead {
            height: 80vh;
        }

        .masthead h3 {
            font-size: 1.5rem;
        }
    }

    @media (min-width: 300px) {
        .masthead {
            height: 80vh;
        }
    }

    @media (max-width: 580px) {
        .masthead {
            margin: 10px;
        }
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.php">
            <img src="../images/logo.png" width="30" height="30" alt="" loading="lazy">
            UR-CODES lite
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" >

                <li class="nav-item active">
                    <a class="nav-link" href="about_us.php"><i class="far fa-address-card"></i>&nbsp;About Us<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link visible btn-login btn btn-danger text-white" href="<?php echo $href ?>"><?php echo $text ?></a>
                </li>

            </ul>
        </div>
    </nav>
    <a class="nav-link active" href="../index.php"><i class="fa fa-long-arrow-left"></i> Back <span
            class="sr-only">(current)</span></a>

    <header class="masthead d-flex">
        <div class="container text-center my-auto">

            <h3 class="mb-5">
                <em>"Here ,you can view all the coding projects developed by our students and also you can upload your
                    own projects to help other students."</em>
            </h3>

            <a class="btn btn-primary btn-lg py-3 px-5 mb-3 mr-md-3 " href="view_projects.php"><i class="far fa-eye"></i>&nbsp;View Projects</a>
            <a class="btn btn-success btn-lg py-3 px-5 mb-3 mr-md-3" href="upload_file.php"><i class="fas fa-cloud-upload-alt"></i>&nbsp;Upload Projects</a>
        </div>
        <div class="overlay"></div>
    </header>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>