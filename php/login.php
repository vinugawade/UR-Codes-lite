<!DOCTYPE html>
<html>
<head>
    <title>UR-Codes lite</title>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <!--  Show this only on mobile to medium screens  -->
        <a class="navbar-brand d-lg-none" href="../index.php"><img src="../images/logo.png" width="30" height="30"
                alt="" loading="lazy">
            UR-CODES lite</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle"
            aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--  Use flexbox utility classes to change how the child elements are justified  -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="./index.php"><i class="fa fa-long-arrow-left"></i> Back <span
                            class="sr-only">(current)</span></a>
                </li>
<li class="nav-item">
        <a class="nav-link" href="../index.php"><i class="fas fa-home"></i>&nbsp;Home</a>
      </li>

            </ul>
            <!--   Show this only lg screens and up   -->
            <a class="navbar-brand d-none d-lg-block ml-5" href="../index.php"><img src="../images/logo.png" width="30"
                    height="30" alt="" loading="lazy">
            </a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./about_us.php"><i class="far fa-address-card"></i>&nbsp;About Us</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row text-center py-5">
            <div class="col-lg-6 col-md-6 col-sm-12 py-2">
                <div class="card" style="font-family: 'Montserrat', sans-serif;  ">
                    <div>
                        <div class="row mt-5">
                            <div class="col-sm-8">
                                <h3>LOG-IN Here</h3>
                            </div>
                            <div class="col-sm-4"><i class="fa fa-user" style="font-size:60px;color:red"></i></div>
                        </div>
                    </div>
                    <div class="card-body">

                        <form action="./Log-in.php" method='POST'>
                            <div class="form-group">
                                <input type='email' name='email' inputmode='email' id='email' placeholder="EMAIL" class='form-control' required>
                            </div>
                            <div class="form-group">

                                <input type='password' inputmode='password' name='password' placeholder="PASSWORD" class='form-control'
                                    required>
                            </div>
                            <div class="my-4">
                                <button type='submit' name='submit' class='btn btn-primary'><i class="fas fa-sign-in-alt"></i>&nbsp;LOGIN</button><br><br>
                                <a id="check" href='./login.php' class="text-muted text-center"><small>Forgot Password? Click Here</small></a>
                                <div class="alert alert-warning mt-3 "  role="alert">
                                <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;Note:</strong> You need <strong class="alert-link" >internet</strong> to get the recovery mail.
                                </div>
                                <script>
                                    check.addEventListener('click',function(){
                                        if (navigator.onLine) {
                                            if(document.getElementById('email').value!=""){
                                            document.getElementById('check').href="./forgot.php?email="+document.getElementById('email').value;
                                        }else{
                                            alert("Please Fill Email Field.");
                                        }
                                            } else {
                                                alert("You need internet to get the recovery Key.");
                                            }
                                        });
                                    </script>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-lg-6  col-md-6 col-sm-12 py-2">
                <div class="card">
                    <div>

                        <div class="row mt-5">
                            <div class="col-sm-8">
                                <h3>REGISTER Here</h3>
                            </div>
                            <div class="col-sm-4"><i class="fa fa-user-plus" style="font-size:60px;color:red"></i></div>
                        </div>
                    </div>
                    <div class="card-body">

                        <form action="./register.php" method="POST">
                            <div class="form-group">

                                <input type='text' inputmode='text' name='full_name' placeholder="YOUR FULL NAME HERE"
                                    class='form-control' required>
                            </div>
                            <div class="form-group">

                                <input type='email' inputmode='email' name='email' placeholder="EMAIL" class='form-control' required>
                            </div>

                            <div class="form-group">

                                <input type='tel' inputmode='tel' pattern="[789][0-9]{9}" placeholder="PHONE NO" name='number'
                                    class='form-control' required>
                            </div>
                            <div class="form-group">

                                <input type='password' inputmode='password' name='password' placeholder="PASSWORD" class='form-control'
                                    required>
                            </div>
                            <div class="my-4">
                                <button type='submit' name='submit' class='btn btn-primary'><i class="fas fa-user-plus"></i>&nbsp;REGISTER</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>