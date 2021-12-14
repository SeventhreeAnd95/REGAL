
<?php
session_start();
$_SESSION['current'] = 'home';
include "../config.php";
?>
<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href= "../js/jquery-3.5.1.js" rel="stylesheet">
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
  <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = google.visualization.DataTable([
         ['Element', 'Density', { role: 'style' }, { role: 'annotation' } ],
         ['Copper', 8.94, '#b87333', 'Cu' ],
         ['Silver', 10.49, 'silver', 'Ag' ],
         ['Gold', 19.30, 'gold', 'Au' ],
         ['Platinum', 21.45, 'color: #e5e4e2', 'Pt' ]
      ]);


        // Set chart options
        var options = {'title':'Membership table',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
  </script>
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
                    -webkit-box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.1), -2px -2px 3px rgba(0, 0, 0, 0.1);
                    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.1), -2px -2px 3px rgba(0, 0, 0, 0.1)
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
                    
                    li {
                        list-style-type: none;
                        }



              
  </style>
</head>
<body class="sb-nav-fixed" onload="getdata()">
<div class="wrapper ">
  <?php include("sidebar.php"); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include("Navigation1.php"); ?>
      <!-- End Navbar -->
      <div class="content">
                <main>
                    <div class="container-fluid px-4 ">
                        <h2 class="mt-4" style="margin-bottom: 30px;">Dashboard</h2>
                        <hr>
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
                    </div>
                   <hr style="margin-left: 10px; margin-right: 30px;">
                   <h3 style="text-align:center" onload="getdata()" > Overview</h3>
                            <div class="container" style="margin-top: 70px; margin-bottom: 50px;"> 
                                <div class="DataTables_wrapper"  id="getdata">

                                </div>
                            </div>
                </main>
                <?php include("Footer.php"); ?>
            
      </div>
    </div>
</div>
        


<script>
     function getdata(){
        
        $.ajax({
                    url:"mem_details.php",
                    method:"POST",
                    success: function(data)
                    {
                        $('#getdata').html(data);
                    }          
}
);
    }
                    
</script>
<script src="../js1/core/jquery.min.js"></script>
  <script src="../js1/core/popper.min.js"></script>
  <script src="../js1/core/bootstrap.min.js"></script>
  <script src="../js1/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="../js1/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../js1/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../js1/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
</body>

</html>