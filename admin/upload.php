<?php
session_start();
if(empty($_SESSION['name'])){
  header('location:/admin/index.php');
}else{
$team = $_POST['team'];
if(isset($_POST['upload'])){
$dir = "../ipl/$team";
$fi = new FilesystemIterator($dir, FilesystemIterator::SKIP_DOTS);
$fileCount = iterator_count($fi);
$fileCount++;
$target_dir = "../ipl/$team/";
$extention=  explode(".", $_FILES["fileToUpload"]["name"]);
$filetype=end($extention);
$target_file = $target_dir . $fileCount . '.'. $filetype;
$uploadOk = 1;
$err="";
// Check if file already exists
if (file_exists($target_file)) {
  $err.="Sorry, file already exists.<br/>";
  $uploadOk = 0;
}
//check the type of the file
if($filetype !== "mp4"){
$err.= "Sorry,ONLY MP4 files are Allowed.<br/>";
$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $err .= "Sorry, your file was not uploaded.";
  header("location:/admin/$team.php?message=$err&type=0");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $msg="The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    header("location:/admin/$team.php?message=$msg&type=1");
  } else {
    $err="Sorry, there was an error uploading your file.";
  }
}
}
}?>