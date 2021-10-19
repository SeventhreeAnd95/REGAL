<?php
session_start();
$_SESSION['current'] = 'home';
include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Regal</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="css/w3.css">
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/navigation.css" rel="stylesheet"/>
        <style>
           .box{
               margin-left:150px;
               margin-right:150px;
           }

           .text-uppercase{
               margin-bottom:50px;
           }
           .btn{
               margin-top:50px;
               float: right;
           }
            </style>

    </head>


    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php include("Navigation.php"); ?>
            <div class="box"><br><br>
						<h2 class="text-uppercase">Login</h2>
						
						<form action="Login1.php" method="post">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" name="Email_ID" id="Email_ID">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="Password" id="Password">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Sign in</button>

						</form>
					</div>




        </main>
        <!-- Footer-->
        <?php include("footer.php"); ?>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
