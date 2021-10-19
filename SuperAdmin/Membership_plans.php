<?php
session_start();
$_SESSION['current'] = 'home';
include "../config.php" ;	
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>REGAL</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <script src="https://use.fontawesome.com/c8154970b8.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../css1/bootstrap.min.css" rel="stylesheet" />
  <link href="../css1/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../demo1/demo.css" rel="stylesheet" />
        <style> 
                .button {
                                background-color: #4CAF50; /* Green */
                                border: none;
                                color: white;
                                padding: 15px 32px;
                                text-align: center;
                                text-decoration: none;
                                display: inline-block;
                                font-size: 16px;
                            }

                
                nav     {
                                background-color: #F5F5F5;
                                box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                        }
        </style>
    </head>
    <body class="d-flex flex-column h-100">
    <div class="wrapper ">
  <?php include("sidebar.php"); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include("Navigation1.php"); ?>
      <!-- End Navbar -->
      <div class="content">
        <main class="flex-shrink-0">
                <div class="container " style="margin-top: 20px;">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Pay as you grow</h1>
                        <p class="lead fw-normal text-muted mb-0">With our no hassle pricing plans</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <!-- Pricing card free-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card-body p-5">
                                    <div class="small text-uppercase fw-bold text-muted">Silver</div>
                                    <div class="mb-3">
                                        <span class="display-4 fw-bold">₹0</span>
                                        <span class="text-muted">/ mo.</span>
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Access to limited content
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Limited mock interviews
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            No Reports 
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <i class="bi bi-check text-primary"></i>
                                            Dedicated support
                                        </li>
                                       
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Pricing card pro-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card-body p-5">
                                    <div class="small text-uppercase fw-bold">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        Gold
                                    </div>
                                    <div class="mb-3">
                                        <span class="display-4 fw-bold">₹500</span>
                                        <span class="text-muted">/ mo.</span>
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Access to unlimited mock tests
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Access to all the content
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Dedicated support
                                        </li>
                                       
                                        <li class="text-muted">
                                            <i class="bi bi-check text-primary"></i>
                                            Monthly status reports
                                        </li>
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-primary" href="#!">Choose plan</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Pricing card enterprise-->
                        
                    </div>
                </div>
           
        
        </main>
      </div>
        <!-- Footer-->
        <?php include("Footer.php"); ?>
      </div>
    </div>
        <!-- Bootstrap core JS-->
        <script src="https://use.fontawesome.com/c8154970b8.js"></script>
        <script src="../js1/core/jquery.min.js"></script>
  <script src="../js1/core/popper.min.js"></script>
  <script src="../js1/core/bootstrap.min.js"></script>
  <script src="../js1/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../js1/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../js1/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../js1/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../demo1/demo.js"></script>

        <script src="../js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    </body>
</html>
