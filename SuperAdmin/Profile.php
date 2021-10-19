


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

    
    <!--bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../css1/bootstrap.min.css" rel="stylesheet" />
  <link href="../css1/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../demo1/demo.css" rel="stylesheet" />
    
    <title>UserDash</title>
    
    <style>
      html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -ms-overflow-style: scrollbar;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      }
      h1{
        text-align: center;
        color: var(--white);
        padding-left: 550px;
        padding-bottom: 200px;
      }
      .navbar   {
                    background-color: #F5F5F5;
                    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                }
                .collapse {
                    margin-left: 730px;
                }
                .sb-sidenav {
                  background-color: #F5F5F5;
                  box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                }
                .button {
                        background-color: #4CAF50;
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                    }
                    .card{
                      width: 850px;
                      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                      text-align: center;
                    }

                  

      </style>
  </head>
  <body style="background-color: var(--lighter);">
      
<div class="wrapper ">
  <?php include("sidebar.php"); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include("Navigation1.php"); ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="col-xl-8 order-xl-1" style="margin-top:50px;">
                  <div class="card" style= "background-color:#dcdcdc; ">
                    <div class="card-header border-0">
                      <div class="row">
                        <div class="col">
                          <a href="Profile.php" class="btn btn-sm btn-primary"  style="margin-left:700px;">Save</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <form>
                        <h6>User information</h6>
                        <div class="pl-lg-4">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-username">Username</label>
                                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" for="input-email">Email address</label>
                                <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="Email address">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-first-name">First name</label>
                                <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-last-name">Last name</label>
                                <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="">
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="my-4">
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Contact information</h6>
                        <div class="pl-lg-4">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-address">Address</label>
                                <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-city">City</label>
                                <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="">
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-country">Country</label>
                                <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="">
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label class="form-control-label" for="input-country">Postal code</label>
                                <input type="tel" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="my-4">
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">About me</h6>
                        <div class="pl-lg-4">
                          <div class="form-group focused">
                            <label>About Me</label>
                            <textarea rows="4" class="form-control form-control-alternative" placeholder=""></textarea>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
        </div>
      </div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>