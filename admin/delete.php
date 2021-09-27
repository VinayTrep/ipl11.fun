<?php
if (isset($_GET['file_name'])) {
    $fileToDelete = $_GET['file_name'];
    $team = $_GET['team'];
    $dir = "../ipl/$team";
    print $fileToDelete;
    $opdir= opendir($dir);
    if(unlink($dir.'/'.$fileToDelete))
    {
        echo "file named $fileToDelete has been deleted successfully";
    }
    else
    {
        echo "file is not deleted";
    }
   closedir($opdir);
}
