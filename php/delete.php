<?php
// ******************required imports******************
require 'connect.php';
header('Cache-Control: no cache');
session_cache_limiter('private_no_expire');
session_start();


if (isset($_POST['delete-click']) && $_SESSION['filename'] && $_SESSION['download']) {
    //******************Delete Project******************
    $sql = "DELETE FROM `uploaded_project` WHERE `project_code`='{$_SESSION['projectname']}' AND `project_zip_directory`='{$_SESSION['download']}' AND `project_size`='{$_SESSION['size']}'";
    if ($conn->query($sql) === TRUE) {
        // if (array_map('unlink', glob($_SESSION["download"] . "/*")) == true && array_map('unlink', glob($_SESSION["download"] . "/*.*")) == true && rmdir($_SESSION["download"]) == true) {

            @unlink('../uploaded/zip/' . $_SESSION['filename'] . '.zip');

            $dir = $_SESSION["download"].'/';
            $dir = new RecursiveDirectoryIterator($dir,FilesystemIterator::SKIP_DOTS);
            // directory only
            $dir = new RecursiveIteratorIterator($dir,RecursiveIteratorIterator::CHILD_FIRST);

            // Removing directories and files inside
            foreach ($dir as $file) {
                $file->isDir() ?  rmdir($file) : unlink($file);
            }

            if (rmdir($_SESSION["download"]) == true) {
            echo "<script>alert('Project Deleted.')</script>";
            echo "<script> window.location.assign('./view_projects.php'); </script>";
        } else {
            echo "<script> window.location.assign(./'view_projects.php'); </script>";
        }
    } else {
        echo "<script> window.location.assign('./view_projects.php'); </script>";
    }
} else {
    echo "<script> window.location.assign('./view_projects.php'); </script>";
}
