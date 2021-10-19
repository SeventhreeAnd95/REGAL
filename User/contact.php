

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
    <!--bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>REGAL</title>
       
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>
      <div class="wrapper ">
            <?php include("sidebar.php"); ?>
                <div class="main-panel">
                            <!-- Navbar -->
                            <?php include("Navigation1.php"); ?>
                            <!-- End Navbar -->
                            <div class="content">
                                        <main>
                                            <!-- Page content-->
                                            <section class="py-5">
                                                <div class="container px-5">
                                                    <!-- Contact form-->
                                                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                                                        <div class="text-center mb-5">
                                                            <div class="feature bg-primary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                                                            <h1 class="fw-bold">Get in touch</h1>
                                                            <p class="lead fw-normal text-muted mb-0">We'd love to hear from you</p>
                                                        </div>
                                                        <div class="row gx-5 justify-content-center">
                                                            <div class="col-lg-8 col-xl-6">
                                                            
                                                                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                                                    <!-- Name input-->
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                                                        <label for="name">Full name</label>
                                                                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                                                    </div>
                                                                    <!-- Email address input-->
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                                                        <label for="email">Email address</label>
                                                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                                                    </div>
                                                                    <!-- Phone number input-->
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                                                        <label for="phone">Phone number</label>
                                                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                                                    </div>
                                                                    <!-- Message input-->
                                                                    <div class="form-floating mb-3">
                                                                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                                                        <label for="message">Message</label>
                                                                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                                                    </div>
                                                                    <!-- Submit success message-->
                                                                    <!---->
                                                                    <!-- This is what your users will see when the form-->
                                                                    <!-- has successfully submitted-->
                                                                    <div class="d-none" id="submitSuccessMessage">
                                                                        <div class="text-center mb-3">
                                                                            <div class="fw-bolder">Form submission successful!</div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Submit error message-->
                                                                    <!---->
                                                                    <!-- This is what your users will see when there is-->
                                                                    <!-- an error submitting the form-->
                                                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                                                    <!-- Submit Button-->
                                                                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Contact cards-->
                                                    <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                                                        <div class="col">
                                                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                                                            <div class="h5 mb-2">Chat with us</div>
                                                            <p class="text-muted mb-0">Chat live with one of our support specialists.</p>
                                                        </div>
                                                        <div class="col">
                                                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                                                            <div class="h5">Ask the community</div>
                                                            <p class="text-muted mb-0">Explore our community forums and communicate with other users.</p>
                                                        </div>
                                                        <div class="col">
                                                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                                                            <div class="h5">Support center</div>
                                                            <p class="text-muted mb-0">Browse FAQ's and support articles to find solutions.</p>
                                                        </div>
                                                        <div class="col">
                                                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                                                            <div class="h5">Call us</div>
                                                            <p class="text-muted mb-0">Call us during normal business hours at +919999999999.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </main>
                            </div>
                            <?php include('Footer.php'); ?>
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
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
