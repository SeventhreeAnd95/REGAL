<?php
include "../config.php";
?>


<!doctype html>
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
.centred-button{
    margin-left:390px;
    margin-top: 50px;
}
.centred-button i{
    margin-right:10px;
}
.centred-button .btn {
  margin-left:330px;
}
.card-body .row{
    margin:50px;
}
.card .card-title{
    text-align: center;
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

footer .d-flex a{
                        color:black;
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
      <div class="card" id="Searchlog">
        <div class="card-body">
        <h5 class="card-title">Activity Log</h5>
        <div class="row">
            <div class="col">
                <input type="date" class="form-control" placeholder="" aria-label="Created From">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Activity log type" aria-label="Activity log type">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="date" class="form-control" placeholder="" aria-label="Created To">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
        </div>
        <div class="centred-button">
        <button type="button" class="btn btn-secondary"><i class="fas fa-search"></i>Search</button>
        </div>
        </div>
      </div>
        <hr>
        <table id="customers">
            <tr>
                <th>Company</th>
                <th>Contact</th>
                <th>Country</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>Christina Berglund</td>
                <td>Sweden</td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>Francisco Chang</td>
                <td>Mexico</td>
            </tr>
 
        </table>



      </div>
      <?php include("Footer.php"); ?>
    </div>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>