
<?php
include '../config.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="..img1/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>
   REGAL- Admin Dash
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <link href="../assets1/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets1/demo/demo.css" rel="stylesheet" />
  <style>
    .main-panel{
      background-color:#F8F8F8;
    }

    .card{ font-family:Arial, Helvetica, sans-serif;
    color:black;}
   
    /* Hide scrollbar for Chrome, Safari and Opera */
.sidebar::-webkit-scrollbar {
  display: none;
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
      <div class="card" style="width: auto;">
            <div class="card-body">
                <h5 class="card-title">Membership Plans</h5>
                
<form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Mark" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Otto" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">No of hours</label>
                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Visa" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please enter the number of hours.
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">Card Type</label>
                        <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Silver</option>
                        <option>Gold</option>
                        </select>
                        <div class="invalid-feedback">
                        Please select card type
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide amount.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">Leads</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a Leads
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">Sub Area Franchise</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a Franchise
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">Area Franchise</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a Franchise
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">City Franchise</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a Franchise
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">State Franchise</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a Francise
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
</form>
            </div>
            </div>
      
     
            
                        
      </div>
                <?php include("Footer.php"); ?>
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
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
 
</body>

</html>
