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
    footer{
        background-color:black;
    }
    .content{
        margin-bottom: 200px;
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
.sidebar::-webkit-scrollbar {
  display: none;
}

#example {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#example td, #example th {
  border: 1px solid #ddd;
  padding: 8px;
}

#example tr:nth-child(even){background-color: #f2f2f2;}

#example tr:hover {background-color: #ddd;}

#example th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #A9A9A9;
  color: white;
}

#myInput{
    float: right;
    margin-bottom:30px;
}
/* Hide scrollbar for IE, Edge and Firefox */
.sidebar {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
footer #links a{
    color:black;
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




<div class="container-fluid">
                    <?php
                        
                        $count = mysqli_query($con, "SELECT * FROM regal_mem_details") or die(mysqli_error($con));
                        $row_count = mysqli_fetch_array($count);
                        if ($row_count != 0) {
                      ?>
                      <br>
                      <form action="">
                        <input id="myInput" type="text" placeholder="Search..">

                        <table id="example" class="display" style="width:100%" border='2'>
                            <thead>
                                <tr>
                                    <!-- <th>Sl.</th> -->  
                                    <th>Email Id</th>
                                    <th>Memtype</th>
                                    <th>Amount</th>
                                    <th>Txn Number</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Usage</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                              <?php $membership_details = mysqli_query($con,"SELECT * FROM regal_mem_details") or die(mysqli_error($con));
                                while ($row = mysqli_fetch_array($membership_details)) {
                              ?>
                              <tbody id="myTable">
                                <tr style="border:2px solid black ;overflow-x:auto; ">
                                    <!-- <td><?php echo $row['id'];?></td> -->
                                    <td><?php echo $row['email_id'];?></td>
                                    <td><?php echo $row['mem_type'];?></td>
                                    <td><?php echo $row['mem_amount'];?></td>
                                    <td><?php echo $row['transaction_number'];?></td>
                                    <td><?php echo $row['start_date'];?></td>
                                    <td><?php echo $row['end_date'];?></td>
                                    <td><?php echo $row['start_time'];?></td>
                                    <td><?php echo $row['end_time'];?></td>
                                    <td><?php echo $row['number_of_hours'];?></td>
                                    <td><?php echo $row['duration'];?></td>
                                </tr>
                              </tbody>
                            <?php } ?>
                        </table>
                      </form>
                      <?php } ?>
                      </div>
      </div>
      <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div id="links">
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
</footer>
    </div>
    
</div>


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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>
   



</html>