

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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>UserDash</title>
    
    <style>
    
   
            body {
              position: relative;
              justify-content: center;
              align-items: center;
              height: 100vh;
            }
            
              h2 {
                margin: 0;
              }
              
              h3 {
                margin: 0;
                font-weight: 500;
              }
            .container .card {
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
              max-width: 300px;
              margin: auto;
              text-align: center;
              font-family:'Times New Roman', Times, serif;
            }

            

            .container .card button {
              border: none;
              outline: 0;
              padding: 12px;
              color: white;
              background-color: #000;
              text-align: center;
              cursor: pointer;
              width: 100%;
              font-size: 18px;
            }
            .container-fluid p{
              text-align: center;
              
            }
            
            main{
              margin-top: 10px;
              margin-bottom: 30px;
            }

            .conainer .card button:hover {
              opacity: 0.7;
            }

            .container-fluid p {
              font-size: 21px;
              font-family:'Times New Roman', Times, serif;
              color:black;
            }
           
            img{
              width:100%
            }
              
            p button a{
              text-decoration: none; color: whitesmoke;
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
  <div class="container-fluid">
       
        <p>The perfect solution for busy professionals who need to balance work and career building.</p>
        <p>More than 1000 certificates already issued!</p>
  </div>
  <div class="container">
  <div class="row">
    <div class="col">
    <div class="card" >
        <img src="../images/1549333.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col">
    <div class="card" >
        <img src="../images/1549333.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col">
    <div class="card" >
      <img src="../images/1549333.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    </div>
  </div>
  </div>

                            </div>
                </div>
      </div>
  </main>
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

  </body>
  
</html>


