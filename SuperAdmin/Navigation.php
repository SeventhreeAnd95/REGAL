<?php
include '../config.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="..img1/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   REGAL- Admin Dash
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../css1/bootstrap.min.css" rel="stylesheet" />
  <link href="../css1/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../images/20210801_224654.jpg">
          </div>
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          REGAL
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="./dashboard.html">
            <i class="fas fa-columns"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./dashboard.html">
            <i class="fas fa-users"></i>
              <p>Membership Plans</p>
            </a>
          </li>
          <li>
            <a href="./icons.html">
            <i class="fas fa-store-alt"></i>
              <p>Franchise</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
            <i class="far fa-question-circle"></i>
              <p>Questions</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
            <i class="far fa-address-card"></i>
              <p>Memberships</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
            <i class="far fa-clipboard"></i>
              <p>Practice Logs</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
            <i class="fas fa-poll"></i>
              <p>Results</p>
            </a>
          </li>
          <li>
            <button class="btn btn-success" type="button"><a href="">Share Membership Link<i class="fab fa-whatsapp"></i></a></button>
          </li>
          <li>
            <button class="btn" type="button" style="background-color: #00B2C2;width:270px;"><a href="">Share Practice link<i class="fab fa-whatsapp"></i></a></button>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler" style="color:black">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                  <i class="fas fa-search"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                <i class="fas fa-cog"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Settings</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user" style="font-size:14px;"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      </body>

</html>