<?php
header('Cache-Control: no cache');
session_cache_limiter('private_no_expire');
include("./includes/check_user.php");

// ******************User Defined Function******************
function is_dir_empty($dir) {
  if (!is_readable($dir)) return NULL;
  return (count(scandir($dir)) == 2);
}


if (isset($_POST['download-click']) && $_SESSION['filename'] && $_SESSION['download']) {

    $rootPath = realpath(str_replace(".zip","",$_SESSION['download']));

// ******************Zip Creation******************
    $zip = new ZipArchive();
    if (!is_dir("../uploaded/zip")) {

        echo "<script>alert('You Couldn\'t Download At This Movement Please Contact The Developers.(DE:1)');window.location.assign('./view_projects.php'); </script>";

    } else {

        $zip->open( "../uploaded/zip/" . $_SESSION['filename'] . ".zip", ZipArchive::CREATE | ZipArchive::OVERWRITE);

        if (!is_dir("../uploaded/".$_SESSION['filename'])) {

//******************Get Project Name******************
            $sql = "SELECT * FROM `uploaded_project` WHERE  `project_code`='{$_SESSION['projectname']}'";
                $result = $conn->query($sql);
                $count = $result->num_rows;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $dir=str_replace(".zip","",$row['project_zip_directory']);
                    }
                }

                if(count(glob("$dir/*")) === 0){

                    echo "<script>alert('Project Folder is Currently Empty Please Contact The Developers.(DE:2)');window.location.assign('./view_projects.php'); </script>";

                }else{
                        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($rootPath), RecursiveIteratorIterator::SELF_FIRST);
                        foreach ($files as $name => $file) {
                            if (!$file->isDir()) {
                                $filePath = $file->getRealPath();
                                $relativePath = substr($filePath, strlen($rootPath) + 1);
                                $zip->addFile($filePath, $relativePath);
                            }
                        }

                        $q = "UPDATE `uploaded_project` SET `download_count`=`download_count`+1 WHERE `project_size`='{$_SESSION['size']}' AND `project_name`='{$_SESSION['filename']}'";

                        if ($conn->query($q) === true) {

                            //******************download URL******************
                            header('Location:' . '../uploaded/zip/' . $_SESSION['filename'] . '.zip');

                        } else {
                            echo "<script>alert('Database Not Updating Please Contact Developers.'); window.location.assign('./view_projects.php'); </script>";
                        }

            }
        } else {

            echo "<script>alert('You Couldn\'t Download At This Movement Please Contact The Developers.(DE:3)');window.location.assign('./view_projects.php'); </script>";

        }
        $zip->close();
    }
} else {

    echo "<script>alert('Something Wrong happens While Downloading File.');window.location.assign('./view_projects.php'); </script>";

}
