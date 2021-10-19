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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets1/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets1/demo/demo.css" rel="stylesheet" />
  <link href="../css/sidebars.css">

  <style>
    .main-panel{
      background-color:#F8F8F8;
    }
    .content #Statistics .card{
      height: 170px;
    }
    /* Hide scrollbar for Chrome, Safari and Opera */
.sidebar-wrapper::-webkit-scrollbar {
  display: none;
}

.sidebar-wrapper .collapse{
  margin-left:10px;
}

/* Hide scrollbar for IE, Edge and Firefox */
.sidebar-wrapper {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
  </style>
</head>

<body>
<div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="dashboard.php" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../images/20210801_224654.jpg">
          </div>
        </a>
        <a href="dashboard.php" class="simple-text logo-normal">
          REGAL
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="dashboard.php">
            <i class="fas fa-columns"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="addmembershiptypes.php">
            <i class="fas fa-users"></i>
              <p>Membership Plans</p>
            </a>
          </li>
          <li>
            <a href="Manage_Franchise.php">
            <i class="fas fa-store-alt"></i>
              <p>Franchise</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
            <i class="fas fa-question-circle"></i><p> Questions
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="AddQuestions.php">
                  <i class="fas fa-folder-plus"></i>
                    <span class="sidebar-normal"> AddQuestions </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="viewquestions.php">
                  <i class="far fa-eye"></i>
                    <span class="sidebar-normal"> ViewQuestions</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExample">
            <i class="fas fa-question-circle"></i><p> Theory
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExample">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="addtheory.php">
                  <i class="fas fa-folder-plus"></i>
                    <span class="sidebar-normal"> AddTheory </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="viewtheory.php">
                  <i class="far fa-eye"></i>
                    <span class="sidebar-normal"> ViewTheory</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="membership_details.php">
            <i class="fas fa-address-card"></i>
              <p>Memberships</p>
            </a>
          </li>
          <li>
            <a href="Activitylog.php">
            <i class="fas fa-clipboard-list"></i>
              <p>Practice Logs</p>
            </a>
          </li>
          <li>
            <a href="Results.php"><i class="fas fa-poll"></i>
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
</body>
<script src="../js/sidebars.js"></script>
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
  <script src="../assets1/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets1/demo/demo.js"></script>
</html>
          