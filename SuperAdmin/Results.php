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
  <style>
    .main-panel{
      background-color:#F8F8F8;
    }
    .content #Statistics .card{
      height: 170px;
    }
    /* Hide scrollbar for Chrome, Safari and Opera */
.sidebar::-webkit-scrollbar {
  display: none;
}
.card .card-title{
    text-align: center;
    margin-bottom:100px;
}

footer .d-flex a{
                        color:black;
                    }

                    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #A9A9A9;
  color: white;
}



/* Hide scrollbar for IE, Edge and Firefox */
.sidebar {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
  </style>
</head>

<body>
  <div class="wrapper ">
  <?php include("sidebar.php"); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include("Navigation1.php"); ?>
      <!-- End Navbar -->
      <div class="content">
      <div class="card">
        <div class="card-body">
        <h5 class="card-title">Total number of tests taken</h5>
        <div class="container" id="Statistics">
        <div class="row">
            <div class="col">
                <p style="margin-left:40px;"><?php
                        $sql = "select COUNT(can_id) registered_users from regal_can_details";
                        $result = mysqli_query($con, $sql) or die ("Query error!");
                        while ($row = mysqli_fetch_array($result)) {
                            $var = $row['registered_users'];
                            echo " " .$var. " ";}?></p>
            Reasoning
            </div>
            <div class="col">
            <p style="margin-left:40px;"><?php
                        $sql = "select COUNT(can_id) registered_users from regal_can_details";
                        $result = mysqli_query($con, $sql) or die ("Query error!");
                        while ($row = mysqli_fetch_array($result)) {
                            $var = $row['registered_users'];
                            echo " " .$var. " ";}?></p>
            English
            </div>
            <div class="col">
            <p style="margin-left:40px;"><?php
                        $sql = "select COUNT(can_id) registered_users from regal_can_details";
                        $result = mysqli_query($con, $sql) or die ("Query error!");
                        while ($row = mysqli_fetch_array($result)) {
                            $var = $row['registered_users'];
                            echo " " .$var. " ";}?></p>
            Group Discussion
            </div>
            <div class="col">
            <p style="margin-left:40px;"><?php
                        $sql = "select COUNT(can_id) registered_users from regal_can_details";
                        $result = mysqli_query($con, $sql) or die ("Query error!");
                        while ($row = mysqli_fetch_array($result)) {
                            $var = $row['registered_users'];
                            echo " " .$var. " ";}?></p>
            Aptitude
            </div>
            <div class="col">
            <p style="margin-left:40px;"><?php
                        $sql = "select COUNT(can_id) registered_users from regal_can_details";
                        $result = mysqli_query($con, $sql) or die ("Query error!");
                        while ($row = mysqli_fetch_array($result)) {
                            $var = $row['registered_users'];
                            echo " " .$var. " ";}?></p>
            Logical Reasoning
            </div>
        </div>
        </div>
        
     </div>




      </div>
      <hr>

      <table id="customers">
            <tr>
                <th>Sl.no</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Reasoning</th>
                <th>English</th>
                <th>Group Discussion</th>
                <th>Apitude</th>
                <th>Logical Reasoning</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Maria Anders</td>
                
            </tr>
            <tr>
                <td>2</td>
                <td>Christina Berglund</td>
                <td>Sweden</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Maria Anders</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Francisco Chang</td>
                <td>Mexico</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Maria Anders</td>
            </tr>
 
        </table>
    </div>
    <?php include("Footer.php"); ?>
  </div>
  
  </div>

    <!--   Core JS Files   -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>