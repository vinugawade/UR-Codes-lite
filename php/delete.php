<?php
header('Cache-Control: no cache');
session_cache_limiter('private_no_expire');
include("./includes/check_user.php");


if (isset($_POST['delete-click']) && $_SESSION['filename'] && $_SESSION['download']) {
    //******************Delete Project******************
function delete(){
            @unlink('../uploaded/zip/' . $_SESSION['filename'] . '.zip');

            $dir = str_replace(".zip","",$_SESSION["download"]).'/';
            $dir = new RecursiveDirectoryIterator($dir,FilesystemIterator::SKIP_DOTS);
            // directory only
            $dir = new RecursiveIteratorIterator($dir,RecursiveIteratorIterator::CHILD_FIRST);

            // Removing directories and files inside
            foreach ($dir as $file) {
                $file->isDir() ?  rmdir($file) : unlink($file);
            }
            if(!is_dir($file)) {
                rmdir(str_replace(".zip","",$_SESSION["download"]));
                return true;
            }
            return false;
        }
            if (delete() === true) {
                $sql = "DELETE FROM `uploaded_project` WHERE `project_code`='{$_SESSION['projectname']}' AND `project_zip_directory`='{$_SESSION['download']}' AND `project_size`='{$_SESSION['size']}'";
    if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Project Deleted.');window.location.assign('./view_projects.php'); </script>";
        } else {
            echo "<script> window.location.assign('./view_projects.php'); </script>";
        }
        } else {
            echo "<script> window.location.assign(./'view_projects.php'); </script>";
        }

} else {
    echo "<script> window.location.assign('./view_projects.php'); </script>";
}
