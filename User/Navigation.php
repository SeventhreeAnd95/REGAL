
<?php
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
    



  </head>
  <body>








  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: -5px;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="margin-left: 5px;">Regal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-left: 250px;">
              <li class="nav-item" style="padding-right: 10px;">
                <a class="nav-link active" aria-current="page" href="Userdashboard.php">Home</a>
              </li>
              <li class="nav-item" style="padding-right: 10px;">
                <a class="nav-link" href="Profile.php">Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-right: 10px;">
                  Practice
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="Reasoning.php">Verbal Reasoning</a></li>
                  <li><a class="dropdown-item" href="English.php">English</a></li>
                  <li><a class="dropdown-item" href="GroupDiscussion.php">Group Discussion</a></li>
                  <li><a class="dropdown-item" href="Aptitude.php">Aptitude</a></li>
                  <li><a class="dropdown-item" href="LogicalReasoning.php">Logical Reasoning</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-right: 10px;">
                  Certification
                </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="Certification.php">Practice- Certification</a></li>
                <li><a class="dropdown-item" href="Certification.php">Certification</a></li>
              </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Subscription.php" >Subscription</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php" >Contact Us</a>
              </li>
            </ul>
            <div class="nav-item" style="padding-left: 50px;">
                <a href="Logout.php" style="color: aliceblue;text-decoration:none;"><i class="bi bi-box-arrow-in-right" style="color: aliceblue; padding-right: 5px; "></i>Sign out</a>  
            </div>
          </div>
        </div>
  </nav>

  </body>
</html>