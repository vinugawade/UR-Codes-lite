<?php
include("./includes/login_check.php");
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Upload Files</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script language="javascript" type="text/javascript" src="../js/script.js"> </script>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="../ckeditor/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/upload_file.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand d-lg-none" href="../index.php">
            <img src="../images/logo.png" width="30" height="30" alt="" loading="lazy">UR-CODES lite
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="./index.php">
                        <i class="fa fa-long-arrow-left"></i>
                        Back <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">
                        <i class="far fa-address-card"></i>
                        &nbsp;About Us
                    </a>
                </li>
            </ul>
            <a class="navbar-brand d-none d-lg-block ml-5" href="../index.php">
                <img src="../images/logo.png" width="30" height="30" alt="" loading="lazy">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item mt-2">
                    <span>Hii..</span>
                    <?php echo @$username; ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-login btn-danger text-white" href="logout.php">
                        <i class='fa fa-sign-out' aria-hidden='true'></i>
                        &nbsp;Log-out
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <script>
	$(document).ready(function(){
		$("#Notice").modal('show');
	});
</script>
<div id="Notice" class="modal fade">
    <div class="modal-body" >
  <h5>Popover in a modal</h5>
  <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-bs-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
  <hr>
  <h5>Tooltips in a modal</h5>
  <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
</div>
</div>
    <div class="container py-4">
        <section>
            <div class="mr-auto"></div>
        </section>
        <div class="row py-1">
            <div class="col-lg-8 col-md-6 col-sm-12 py-5 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-upload"></i>&nbsp;Upload UR-CODE Here</h3>
                    </div>
                    <div class="card-body">
                        <form action="./upload.php" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <input type="text" inputmode='text' class="form-control" name="project_name" placeholder="Your Project Title" required />
                                <br>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <label for="project-_desc">Project Description</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" id="long_desc" name="project_description" id="project_description" placeholder="Your Project Description"></textarea>
                                        <script type="text/javascript">
                                            CKEDITOR.replace('long_desc');
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <select class="form-control mt-2" name="department" required>
                                            <option>Select Department First</option>
                                            <option value="computer">Computer Engineering</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control mt-2" id="source" name="class" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required>
                                            <option>Select Class</option>
                                            <option value="FY">FY</option>
                                            <option value="SY">SY</option>
                                            <option value="TY">TY</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <script type="text/javascript" language="JavaScript">
                                            document.write('<select class="form-control mt-2" name="sem" id="sem" onchange="javascript: dynamicsubject(this.options[this.selectedIndex].value);" required><option>Select Class First</option></select>')
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="project_sub" id="project_sub" required>
                                    <option>Select Class Semester</option>
                                </select>
                           </div>
                            <br>
                            <div class="form-group">
                                <textarea class="form-control" name="project_group_members" id="project_group_members" placeholder="Names Of Your Members Separate By Comma(',')" required></textarea>
                                <br>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <label for="project_report">Attach Project Report(.PDF)</label>
                                    <input class="form-control py-1" type="file" inputmode='file' name="project_report" accept="application/pdf" required />
                                </div>
                                <div class="col-sm-6">
                                    <label for="projectss_code">Attach Project Code(.ZIP)</label>
                                    <input class="form-control py-1" type="file" inputmode='file' name="project_code" accept="application/x-zip-compressed" required />
                                </div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-block btn-success" type="submit" name="upload">
                            <i class="fas fa-cloud-upload-alt"></i>
                            &nbsp;Upload
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>