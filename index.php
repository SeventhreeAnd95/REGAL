

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
             .col .mb-0{
                text-align: justify;
            }
            </style>

    </head>


    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php include("Navigation.php"); ?>
            <!-- Header-->
            <header class="py-5" style="background-color: #f1f1f1;">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h4 class="display-6 fw-bolder text-black mb-2">Premium certification, customized for your goals</h4>
                                <p class="lead fw-normal text-black-50 mb-4" style="text-align:left;">Explore thousands of real interview questions asked by tech companies. Practice your interview skills by answering questions.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                    <a class="btn btn-outline-black btn-lg px-4" href="Learnmore.php">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="images/interview-preparation.jpg" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">A better way to start with your interviews.</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h5">Real interview questions</h2>
                                    <p class="mb-0">Get full access to our database of 1000+ real interview questions asked by top-tier companies and learn from experts.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h5">Premium courses, customized for your goals</h2>
                                    <p class="mb-0">Our courses are taught by experts across the industry with years of experience.</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Mock interviews and get instant feedback</h2>
                                    <p class="mb-0">Join 6,000+ community members and give mock interviews, get feedback, and find exciting career opportunities.</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Complete customized courses</h2>
                                    <p class="mb-0">Get access to all of our course materials customized for each company and track your progress to reach your goal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">Get full access to our database of 1000+ real interview questions asked by top-tier companies and learn from experts.</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                    <div class="fw-bold">
                                        TA
                                        <span class="fw-bold text-primary mx-1">/</span>
                                        CEO, P
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

               
            <!-- Blog preview section-->
            
        </main>
        <!-- Footer-->
        <?php include("footer.php"); ?>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
