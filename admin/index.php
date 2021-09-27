<?php
session_start();
$_SESSION['message']="";
if(isset($_POST['submit'])){
    $_SESSION['name'] = $_POST['username'];
    $_SESSION['pswd'] = $_POST['pswd'];
    if($_POST['username']== "Mayyababa"){
        if($_POST['pswd']== "Mahi007143$"){
            $msg = "Login Successful";
            header("location:dashboard.php");
        }
        else{
            $msg = "Invalid password";
        }
    }
    else{
      $msg="Invalid user name";
    }  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="shortcut icon" href="../images/favcon.png" type="image/x-icon">
<title>Login</title>
</head>
<body>
<?php
   if(!empty($msg)){?>
       <div class="alert alert-danger">
       <?php echo "<p>".$msg."</p>" ?>
       </div>
  <?php } ?>
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
   <div class="card border border-success p-3 col-md-4">
       <img src="../images/favcon.png" alt="" class="card-img-top">
       <h2 class="card-header text-center text-dark">Login</h2>
    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form-group">
            <label for="username" class="form-label">Enter your user name</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="pswd" class="form-label">Enter your password</label>
            <input type="password" name="pswd" id="pswd" class="form-control">
        </div>
        <input type="submit" name="submit" class="btn btn-primary">
       </form>
   </div>
</div>

</body>
</html>