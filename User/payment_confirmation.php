

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
         .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 500px;
    margin: auto;
    text-align: center;
  }
  
  .title {
    color: grey;
    font-size: 18px;
  }
  
  button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 90%;
    font-size: 18px;
  }

  .btn #share{
    width:270px;
  }

  .btn #share1{
    width:270px;
  }
  
  a {
    text-decoration: none;
    font-size: 13px;
    color: black;
  }
  
  button:hover, a:hover {
    opacity: 0.7;
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
      
      <div class="card" style="margin-top: 60px; margin-bottom: 60px; background-color: antiquewhite; border-radius: 20px;">
        
        <h5 style="padding: 50px;">REGAL Practice Membership</h5>
        <p><strong>Name:</strong> Innovative Ideas Development Trust </p>
        <p><strong>Account type:</strong> Current </p>
        <p><strong>Account no:</strong> 31335407426</p>
        <p><strong>Bank Name:</strong> State Bank of India</p>
        <p><strong>IFSC Code:</strong> SBIN0041029</p>
        <div class="row">
        <p style="text-align: left; margin-left: 40px;"><strong>Price:</strong><strike>₹15000/-</strike>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Offer:</strong>₹10000/-</p>
        
       </div>
       
        <p style="margin-top: 50px; "><button style="border-radius: 20px;">Proceed to pay ₹10000/-</button></p>
      </div>

                            </div>
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
  <script src="../assets1/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>

        <script src="../js/bootstrap.bundle.min.js" ></script>

   
  </body>
</html>