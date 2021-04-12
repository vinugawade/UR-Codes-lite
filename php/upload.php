<?php
include("./includes/check_user.php");

@$project_name = str_replace(" ", " ", $_POST['project_name']); //String Replacing
@$project_description = $_POST['project_description'];
@$department = $_POST['department'];
@$class = $_POST['class'];
@$sem = $_POST['sem'];
@$project_sub = $_POST['project_sub'];
@$project_group_members = $_POST['project_group_members'];

@$project_report = $_FILES['project_report']['name'];
@$project_code = $_FILES['project_code']['name'];

@$size_code = $_FILES['project_code']['size'];
@$size_report = $_FILES['project_report']['size'];

@$error_code = $_FILES["project_code"]["error"];
@$error_report = $_FILES["project_report"]["error"];

@$temp_project = $_FILES["project_code"]["tmp_name"];
@$temp_report = $_FILES["project_report"]["tmp_name"];

@$ext = "." . end(explode(".", $project_code));

@$dir = str_replace(" ", " ", str_replace(".zip", "", $_FILES["project_code"]["name"])); //String Replacing

@$dir_project = "../uploaded/" . $_FILES["project_code"]["name"];
@$dir_report = "../uploaded/" . str_replace(" ", " ", basename($_FILES["project_report"]["name"])); //String Replacing

@$dir_report_pdf = "../uploaded/" . $dir . "/" . str_replace(" ", " ", basename($_FILES["project_report"]["name"])); //String Replacing
@$dir_report_pdf_not_dash = "../uploaded/" . str_replace(".zip", "", $_FILES["project_code"]["name"]) . "/" . basename($_FILES["project_report"]["name"]); //String Replacing

// ******************Verification Of Project******************
$q = "SELECT * FROM `uploaded_project` WHERE `project_name`='{$project_name}' AND `project_uploader`='{$_SESSION['logged_user']}'";
$sql = $conn->query($q);
if ($sql->num_rows > 0) {
    echo "<script>alert('File Already Uploaded.');window.location.assign('./upload_file.php'); </script>";
} else {

    // ******************Check Error in Selected File******************
    if ($error_code != 0 & $error_report != 0) {

        echo "<script>alert('Please Select Any File.');</script>";
    } else {

        //****************** Move Project Zip To Server******************
        if (move_uploaded_file($temp_project, $dir_project) == true) {

            // ******************Checking It's Or Not******************
            if ($ext === '.zip') {
                $f = 0;
                $zip = new ZipArchive;
                if ($zip->open($dir_project) === true) {

                    // ******************Extract Zip******************
                    $zip->extractTo('../uploaded/');
                    $zip->close();

                    // ******************Deletion of Uploaded Zip File******************
                    if (unlink('../uploaded/' . $_FILES["project_code"]["name"]) == true) {

                        // ******************Move Project Report To Extracted Directory******************
                        if (move_uploaded_file($temp_report, $dir_report_pdf) == true) {

                            // ******************Creation Of 'ReadMe.html' File And Writting******************
                            $myfile = fopen("../uploaded/" . str_replace(".zip", "", str_replace(" ", " ", basename($_FILES["project_code"]["name"]))) . "/ReadMe.html", "w") or die("Unable to open file!");
                            fwrite($myfile, $project_description);
                            fclose($myfile);
                            $f = 1;
                        } else {
                            move_uploaded_file($temp_report, $dir_report_pdf_not_dash);
                        }
                        if ($f !== 1) {
                            $myfile = fopen("../uploaded/" . str_replace(".zip", "", basename($_FILES["project_code"]["name"])) . "/ReadMe.html", "w") or die("Unable to open file!");
                            fwrite($myfile, $project_description);
                            fclose($myfile);
                            $f = 1;
                        }
                    }
                } else {
                    echo "<script>alert('failed');window.location.assign('./upload_file.php'); </script>";
                }
            } else {
                echo "<script>alert('Select .zip File Only.');window.location.assign('./upload_file.php'); </script>";
            }

            // ******************Inserting Project Details In DB******************
            $in = "INSERT INTO `uploaded_project` (`project_name`, `project_description`, `department`, `class`, `sem`, `project_sub`, `project_uploader`, `project_uploader_email`, `project_uploader_number`, `project_group_members`, `project_report`, `project_code`, `project_zip_directory`, `project_report_directory`, `project_size`, `download_count`) VALUES ('{$project_name}', '{$project_description}', '{$department}', '{$class}', '{$sem}', '{$project_sub}', '{$_SESSION['logged_user']}', '{$_SESSION['logged_user_email']}', '{$_SESSION['logged_user_number']}', '{$project_group_members}', '{$project_report}', '{$project_code}', '{$dir_project}', '{$dir_report_pdf}', $size_code+$size_report,0)";
            if ($f === 1) {
                if ($conn->query($in) === true) {
                    echo "<script>alert('File Uploaded Successfully.');window.location.assign('./view_projects.php'); </script>";
                } else {
                    echo "<script>alert('Error in database but File Is Moved.');</script>";
                }
            } else {
                if ($f !== 1) {
                    echo "<script>alert('File Cannot Move.');</script>";
                } else {
                    echo "<script>alert('Error in database.');</script>";
                }
                echo "<script> window.location.assign('./upload_file.php'); </script>";
            }
        }
    }
}
$conn->close();
