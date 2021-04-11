<!DOCTYPE html>
<html>

<head>
    <title>UR-Codes lite</title>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            height: 100%;
            background: #fec107;
        }

        .card {
            border-radius: 25px;
        }

        .btn {
            border-radius: 25px;
        }
    </style>
</head>
<script src="https://smtpjs.com/v3/smtp.js"> </script>
<?php
require './connect.php';

$e = @explode("=", $_SERVER['REQUEST_URI']);
// ******************Verification Of Email******************
$q = "SELECT * FROM user_registration WHERE email = '{$e[1]}'";
$result = $conn->query($q);

if ($result->num_rows == 0) {

    echo "<script>alert('No User Found On Email.')</script>";
    echo "<script> window.location.assign('./login.php'); </script>";
} elseif ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $pass = $row["password"];
    }
}
?>
<script>
    // INTERNET CONNECTIVITY

    // INTERNET CONNECTIVITY

    var key = '<?php echo "$pass" ?>';
    var queryString = decodeURIComponent(window.location.search);
    queryString = queryString.substring(1);
    var TOemail = queryString.split("=");
    console.log(TOemail[1]);
    Email.send({
        Host: "smtp.gmail.com",
        Username: "vjservice23@gmail.com",
        Password: "MyPassword@123",
        To: TOemail[1],
        From: 'UR-Code-lite@support.in',
        Subject: "Recovery Code For UR-Code-lite User",
        Body: "Your Recovery Key Is : " + key,
    }).then(function(message) {
        // message => alert(message+"alert");
        alert("Recovery Key Sent To Your Email.");
    });
</script>

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
                    <a class="nav-link active" href="./login.php"><i class="fa fa-long-arrow-left"></i> Back <span class="sr-only">(current)</span></a>
                </li>
            </ul>

            <!--   Show this only lg screens and up   -->
            <a class="navbar-brand d-none d-lg-block ml-5" href="../index.php"><img src="../images/logo.png" width="30" height="30" alt="" loading="lazy">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./about_us.php"><i class="far fa-address-card"></i>&nbsp;About Us</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container py-4">
        <div class="row text-center py-5">
            <div class="col-lg-4 py-5 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Reset Password</h3>
                    </div>
                    <div class="card-body">
                        <form action='./update.php' method='POST'>
                            <input class="form-control mt-3" type='email' placeholder="Email" name='email' required>

                            <input class="form-control mt-3" type='text' placeholder="Enter Key Sent To Your Email" name='key' required>

                            <input class="form-control mt-3" type='password' placeholder="New Password" name='newpassword' required>

                            <input class="form-control mt-3" type='password' placeholder=" Confirm Password " name='repassword' required>

                            <div class="card-footer mt-3">
                                <button class="btn btn-block btn-primary pt-1" type='submit' name='submit'><i class="fas fa-user-edit"></i>&nbsp;UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>