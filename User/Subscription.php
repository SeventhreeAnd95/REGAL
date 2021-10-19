

<?php
session_start();
$_SESSION['current'] = 'home';
include("../config.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <title>UserDash</title>
    
    
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets1/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
  <link href="../assets1/demo/demo.css" rel="stylesheet" />
    
    <style>
         .container .card  {
            width: 270px;
            height: 500px;
           }

           section #card .btn{
               margin-top:50px;
           }
           .container{
               margin-top:20px;
           }
           .section-title p{
               text-align:center;
           }
           .section-title{
               text-align:center;
           }
           .process-item{
            height:400px;
            width: 300px;
            background-color:#f9f9f9;
            margin-left:-30px;
           }

           .main-panel{
               overflow-x: scroll;
           }

           .card .card-text{
            text-align: center;

           }
           .card p{
               margin-top:55px;
               font-size: 30px;
               font-weight:normal;
           }

           #User .card{
               height:700px;
               font-family: 'Times New Roman', Times, serif;
               text-align: center;
           }
             /* Hide scrollbar for Chrome, Safari and Opera */
.main-panel::-webkit-scrollbar {
  display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.main-panel {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}

.d-flex a{
    text-decoration:none; 
    color:#333;
}
        
    </style>
  </head>
  <body>
      <main>
      <div class="wrapper ">
            <?php include("sidebar.php"); ?>
                <div class="main-panel">
                            <!-- Navbar -->
                            <?php include("Navigation1.php"); ?>
                            <!-- End Navbar -->
                            <div class="content">
        
            <!-- Pricing section-->
            <section class="bg-light py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Get yourself Certified</h1>
                        <p class="lead fw-normal text-muted mb-0">With our no hassle pricing plans</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <!-- Pricing card free-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card-body p-5">
                                    <div class="small text-uppercase fw-bold text-muted"><i class="bi bi-award-fill"></i>
                                    Silver</div>
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
                                    <div class="d-grid" id="card"><a class="btn btn-outline-primary" href="Userdashboard.php">Choose plan</a></div>
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
                                    <div class="d-grid"><a class="btn btn-primary" href="payment_confirmation.php">Choose plan</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Pricing card enterprise-->
                        
                    </div>
                </div>
            </section>
                            </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <?php include('Footer.php'); ?>
        <script src="../assets1/js/core/jquery.min.js"></script>
  <script src="../assets1/js/core/popper.min.js"></script>
  <script src="../assets1/js/core/bootstrap.min.js"></script>
  <script src="../assets1/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets1/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets1/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets1/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>

        <script src="../js/bootstrap.bundle.min.js" ></script>
    </body>
</html>
