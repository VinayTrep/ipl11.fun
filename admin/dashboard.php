<?php
session_start();
if (empty($_SESSION['name'])) {
  header('location:/admin/index.php');
} else { ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="includes/style.css">
    <link rel="shortcut icon" href="../images/favcon.png" type="image/x-icon">
    <title>Dashboard</title>
    <style>
      .img {
        width: 25px;
        height: auto;
      }
    </style>
  </head>

  <body>
    <!-- Vertical navbar -->
    <div class="vertical-nav bg-white" id="sidebar">
      <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center"><a href="/admin/dashboard.php"><img src="../images/favcon.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm"></a>
          <div class="media-body">
            <h4 class="m-0">IPL</h4>
          </div>
        </div>
      </div>

      <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Teams</p>

      <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
          <a href="/admin/csk.php" class="nav-link text-dark font-italic">
            <img src="includes/CSK.png" alt="" class="img">
            CSK
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/mi.php" class="nav-link text-dark font-italic">
            <img src="includes/MI.png" alt="" class="img">
            MI
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/rcb.php" class="nav-link text-dark font-italic">
            <img src="includes/RCB.png" alt="" class="img">
            RCB
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/srh.php" class="nav-link text-dark font-italic">
            <img src="includes/SRH.png" alt="" class="img">
            SRH
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/dc.php" class="nav-link text-dark font-italic">
            <img src="includes/DC.png" alt="" class="img">
            DC
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/kkr.php" class="nav-link text-dark font-italic">
            <img src="includes/KKR.png" alt="" class="img">
            KKR
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/pbks.php" class="nav-link text-dark font-italic">
            <img src="includes/PBKS.png" alt="" class="img">
            PBKS
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/rr.php" class="nav-link text-dark font-italic">
            <img src="includes/RR.png" alt="" class="img">
            RR
          </a>
        </li>
      </ul>
      <p class="text-gray font-weight-bold px-3 py-2 text-uppercase">Alphabets</p>
      <ul class="nav bg-white flex-column mb-0">
        <li class="nav-item">
          <a href="/admin/alpha.php" class="nav-link text-dark font-italic">
          <i class="fas fa-font border rounded-circle p-2"></i>
            Alpha
          </a>
        </li>
      </ul>
    </div>
    <!-- End vertical navbar -->


    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
      <!-- Toggle button -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
          </div>
          <div class="col-md-6 text-right">
            <a href="logout.php" style="text-decoration: none; color:black;"> <i class="fas fa-sign-out-alt"></i>LOGOUT</a>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
        <h2 class="text-muted"><i class="fas fa-hand-point-left"></i> Choose a Team</h2><br>
      </div>
    </div>
    <!-- End demo content -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script>
      $(function() {
        // Sidebar toggle behavior
        $('#sidebarCollapse').on('click', function() {
          $('#sidebar, #content').toggleClass('active');
        });
      });
    </script>
  </body>

  </html>
<?php }
?>