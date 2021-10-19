<?php
session_start();
$_SESSION['current'] = 'home';
include("config.php");	
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>REGAL</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php include("Navigation.php"); ?>
            <!-- Pricing section-->
            <section class="bg-light py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Pay as you grow</h1>
                        <p class="lead fw-normal text-muted mb-0">With our no hassle pricing plans</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <!-- Pricing card free-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card-body p-5">
                                    <div class="small text-uppercase fw-bold text-muted">Free</div>
                                    <div class="mb-3">
                                        <span class="display-4 fw-bold">₹0</span>
                                        <span class="text-muted">/ mo.</span>
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Access to limited content
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Limited mock interviews
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            No Reports 
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <i class="bi bi-check text-primary"></i>
                                            Dedicated support
                                        </li>
                                       
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Pricing card pro-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card-body p-5">
                                    <div class="small text-uppercase fw-bold">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        Pro
                                    </div>
                                    <div class="mb-3">
                                        <span class="display-4 fw-bold">₹500</span>
                                        <span class="text-muted">/ mo.</span>
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Access to unlimited mock tests
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Access to all the content
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Dedicated support
                                        </li>
                                       
                                        <li class="text-muted">
                                            <i class="bi bi-check text-primary"></i>
                                            Monthly status reports
                                        </li>
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-primary" href="#!">Choose plan</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Pricing card enterprise-->
                        
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <?php include("footer.php"); ?>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
