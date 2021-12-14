


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
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets1/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets1/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
         .container .card  {
            width: 18 rem;
            height: 200px;
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
               height:400px;
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
                                    <div class="container">
                                    <div class="row" id="Statistics">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card card-stats">
                                        <div class="card-body ">
                                            <div class="row">
                                            <div class="col-5 col-md-4">
                                                <div class="icon-big text-center icon-warning">
                                                <i class="fas fa-globe"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 col-md-8">
                                                <div class="numbers">
                                                <p class="card-category">Users registered</p>
                                                <p class="card-title"><?php
                                                    $sql = "select COUNT(can_id) registered_users from regal_can_details";
                                                    $result = mysqli_query($con, $sql) or die ("Query error!");
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        $var = $row['registered_users'];
                                                        echo " " .$var. " ";
                                                    }
                                                    ?><p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-stats">
                                            <div class="card-body ">
                                                <div class="row">
                                                <div class="col-5 col-md-4">
                                                    <div class="icon-big text-center icon-warning">
                                                    <i class="fas fa-question-circle"></i>
                                                    </div>
                                                </div>
                                                <div class="col-7 col-md-8">
                                                    <div class="numbers">
                                                    <p class="card-category">Total questions</p>
                                                    <p class="card-title"><?php
                                                        $sqi = "select COUNT(id) registered_users from regal_questions_list ";
                                                        $results = mysqli_query($con, $sqi) or die ("Query error!");
                                                        while ($row = mysqli_fetch_array($results)) {
                                                            $var = $row['registered_users'];
                                                            echo " " .$var. " ";
                                                        }
                                                        ?><p>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-stats">
                                            <div class="card-body ">
                                                <div class="row">
                                                <div class="col-5 col-md-4">
                                                    <div class="icon-big text-center icon-warning">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="col-7 col-md-8">
                                                    <div class="numbers">
                                                    <p class="card-category">Purchases</p>
                                                    <p class="card-title"><?php
                                                        $sql = "select COUNT(id) registered_users from regal_mem_details";
                                                        $result = mysqli_query($con, $sql) or die ("Query error!");
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            $var = $row['registered_users'];
                                                            echo " " .$var. " ";
                                                        }
                                                        ?><p>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-stats">
                                            <div class="card-body ">
                                                <div class="row">
                                                <div class="col-5 col-md-4">
                                                    <div class="icon-big text-center icon-warning">
                                                    <i class="fas fa-users"></i>
                                                    </div>
                                                </div>
                                                <div class="col-7 col-md-8">
                                                    <div class="numbers">
                                                    <p class="card-category">Followers</p>
                                                    <p class="card-title">+45K<p>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                                            
                                                            <div class="row">
                                                                <div class="col">
                                                                <div class="card" >
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Mock test-recent score</h5>
                                                                        <p class="card-text"><?php
                                                                                $sql = "select COUNT(can_id) registered_users from regal_can_details";
                                                                                $result = mysqli_query($con, $sql) or die ("Query error!");
                                                                                while ($row = mysqli_fetch_array($result)) {
                                                                                    $var = $row['registered_users'];
                                                                                    echo " " .$var. " ";
                                                                                }
                                                                                ?></p>
                                                                        
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                <div class="card" >
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Last 3 scores</h5>
                                                                        <p class="card-text"><?php
                                                                                    $sql = "select COUNT(can_id) registered_users from regal_can_details";
                                                                                    $result = mysqli_query($con, $sql) or die ("Query error!");
                                                                                    while ($row = mysqli_fetch_array($result)) {
                                                                                        $var = $row['registered_users'];
                                                                                        echo " " .$var. " ";
                                                                                    }
                                                                                    ?></p>
                                                                        
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                    </div>
                                                    <hr>
                                                    <div class="container-fluid">
                                                                <div class="section-title">
                                                                    <h2>How it works</h2>
                                                                    <p>We are trying to help XXXXX to know/ crack an interview</p>
                                                                </div>
                                                                <div class="container" id="User">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title">Card title<i class="fas fa-certificate"></i></h5>
                                                                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                                                
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                        <div class="card" >
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Card title</h5>
                                                                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                                                    
                                                                                </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col">
                                                                        <div class="card" >
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Card title</h5>
                                                                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                                                    
                                                                                </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                    </div>

                                            
                            </div>
                            <footer class="py-4 bg-light mt-auto">
                                <div class="container-fluid px-4">
                                    <div class="d-flex align-items-center justify-content-between small">
                                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                                        <div >
                                            <a href="#" >Privacy Policy</a>
                                            &middot;
                                            <a href="#" >Terms &amp; Conditions</a>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                </div>
      </div>
     </main>
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