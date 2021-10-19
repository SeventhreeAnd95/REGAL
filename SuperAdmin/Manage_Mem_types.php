
<?php
session_start();
$_SESSION['current'] = 'home';
include "../config.php";

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href= "https://code.jquery.com/jquery-3.5.1.js" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../css/styles.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../css1/bootstrap.min.css" rel="stylesheet" />
  <link href="../css1/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../demo1/demo.css" rel="stylesheet" />
  <title>Admin</title>
  <style>
                nav {
                        background-color: #F5F5F5;
                        box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                }

                .recent-activities .item {
                    padding: 0 15px;
                    border-bottom: 1px solid #eee
                }

                .recent-activities .item div[class*='col-'] {
                    padding: 15px
                }

                .recent-activities h5 {
                    font-weight: 400;
                    color: #333
                }

                .recent-activities p {
                    font-size: 0.75em;
                    color: #999
                }

                .recent-activities .icon {
                    width: 35px;
                    height: 35px;
                    line-height: 35px;
                    background: #f5f5f5;
                    text-align: center;
                    display: inline-block
                }

                .recent-activities .date {
                    font-size: 0.75em;
                    color: #999;
                    padding: 10px
                }

                .recent-activities .date-holder {
                    padding: 0 !important;
                    border-right: 1px solid #eee
                }


                .card-close {
                    position: absolute;
                    top: 15px;
                    right: 15px
                }

                .card-close .dropdown-toggle {
                    color: #999;
                    background: none;
                    border: none
                }

                .card-close .dropdown-toggle:after {
                    display: none
                }

                .card-close .dropdown-menu {
                    border: none;
                    min-width: auto;
                    font-size: 0.9em;
                    border-radius: 0;
                    
                }

                .card-close .dropdown-menu a {
                    color: #999 !important
                }

                .card-close .dropdown-menu a:hover {
                    background: #796AEE;
                    color: #fff !important
                }

                .card-close .dropdown-menu a i {
                    margin-right: 10px;
                    -webkit-transition: none;
                    transition: none
                }
                
                /* Hide scrollbar for Chrome, Safari and Opera */
                    .sb-sidenav-menu::-webkit-scrollbar {
                    display: none;
                    }

                    /* Hide scrollbar for IE, Edge and Firefox */
                    .sb-sidenav-menu {
                    -ms-overflow-style: none;  /* IE and Edge */
                    scrollbar-width: none;  /* Firefox */
                    }


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

              
  </style>
</head>
<body class="sb-nav-fixed">
<div class="wrapper ">
  <?php include("sidebar.php"); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include("Navigation1.php"); ?>
      <!-- End Navbar -->
      <div class="content">
    
            <div id="layoutSidenav_content">
                <main style="background-color:#f1f1f1;">
                    <div class="container-fluid px-4 ">
                        <div class="card text-center" style="width:auto">
                            <div class="card-header"><strong>
                            Add Membership Types</strong>
                            </div>
                                        <div class="card-body">
                                        <div class="row g-2">
                                            <div class="col-md">
                                                <div class="form-floating">
                                                <input type="Type" class="form-control" id="floatingInputGrid" placeholder="Type" value="Type:">
                                                <label for="floatingInputGrid"></label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="Duration:">
                                                <label for="floatingInputGrid"></label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="No. of hours:">
                                                <label for="floatingInputGrid"></label>
                                                </div>
                                            </div>
                                            </div>
                                            <a href="#" class="btn btn-primary" style="margin-top:50px;">ADD</a>
                                        </div>
                                
                            </div>
                                       
                    </div>
                    
                             
                </main>
               
            </div>
            
                </div>
                <?php include("Footer.php"); ?>
                </div>
                </div>

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

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="js/scripts.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
</body>

</html>