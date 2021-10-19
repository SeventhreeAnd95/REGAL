

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

  


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
       
  a {
    text-decoration: none;
    font-size: 13px;
    color: black;
  }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body>
      <div class="wrapper ">
            <?php include("sidebar.php"); ?>
                <div class="main-panel">
                            <!-- Navbar -->
                            <?php include("Navigation1.php"); ?>
                            <!-- End Navbar -->
                            <div class="content">
                                  <div class="container">
                                    <main>
                                      <div class="py-5 text-center">
                                        <img class="d-block mx-auto mb-4" src="Images/icons8-shopping-cart.gif" alt="" width="72" height="57">
                                        <h2>Checkout form</h2>
                                        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
                                      </div>

                                      <div class="row g-5">
                                        <div class="col-md-5 col-lg-4 order-md-last">
                                          <h4 class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="text-primary">Your cart</span>
                                            <span class="badge bg-primary rounded-pill"></span>
                                          </h4>
                                          <ul class="list-group mb-3">
                                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                              <div>
                                                <h6 class="my-0">Product name</h6>
                                                <small class="text-muted">Brief description</small>
                                              </div>
                                              <span class="text-muted"></span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                              <div>
                                                <h6 class="my-0">Second product</h6>
                                                <small class="text-muted">Brief description</small>
                                              </div>
                                              <span class="text-muted"></span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                              <div>
                                                <h6 class="my-0">Third item</h6>
                                                <small class="text-muted">Brief description</small>
                                              </div>
                                              <span class="text-muted"></span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between bg-light">
                                              <div class="text-success">
                                                <h6 class="my-0">Promo code</h6>
                                                <small></small>
                                              </div>
                                              <span class="text-success"></span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                              <span>Total (USD)</span>
                                              <strong></strong>
                                            </li>
                                          </ul>

                                          <form class="card p-2">
                                            <div class="input-group">
                                              <input type="text" class="form-control" placeholder="Promo code">
                                              <button type="submit" class="btn btn-secondary">Redeem</button>
                                            </div>
                                          </form>
                                        </div>
                                        <div class="col-md-7 col-lg-8">
                                          <h4 class="mb-3">Billing address</h4>
                                          <form class="needs-validation" novalidate>
                                            <div class="row g-3">
                                              <div class="col-sm-6">
                                                <label for="firstName" class="form-label">First name</label>
                                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                                <div class="invalid-feedback">
                                                  Valid first name is required.
                                                </div>
                                              </div>

                                              <div class="col-sm-6">
                                                <label for="lastName" class="form-label">Last name</label>
                                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                                <div class="invalid-feedback">
                                                  Valid last name is required.
                                                </div>
                                              </div>

                                              <div class="col-12">
                                                <label for="username" class="form-label">Username</label>
                                                <div class="input-group has-validation">
                                                  <input type="text" class="form-control" id="username" placeholder="Username" required>
                                                <div class="invalid-feedback">
                                                    Your username is required.
                                                  </div>
                                                </div>
                                              </div>

                                              <div class="col-12">
                                                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                                <div class="invalid-feedback">
                                                  Please enter a valid email address for shipping updates.
                                                </div>
                                              </div>

                                              <div class="col-12">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                                <div class="invalid-feedback">
                                                  Please enter your shipping address.
                                                </div>
                                              </div>

                                              <div class="col-12">
                                                <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                                                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                              </div>

                                              <div class="col-md-5">
                                                <label for="country" class="form-label">Country</label>
                                                <select class="form-select" id="country" required>
                                                  <option value="">Choose...</option>
                                                  <option>United States</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                  Please select a valid country.
                                                </div>
                                              </div>

                                              <div class="col-md-4">
                                                <label for="state" class="form-label">State</label>
                                                <select class="form-select" id="state" required>
                                                  <option value="">Choose...</option>
                                                  <option>California</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                  Please provide a valid state.
                                                </div>
                                              </div>

                                              <div class="col-md-3">
                                                <label for="zip" class="form-label">Zip</label>
                                                <input type="text" class="form-control" id="zip" placeholder="" required>
                                                <div class="invalid-feedback">
                                                  Zip code required.
                                                </div>
                                              </div>
                                            </div>

                                            <hr class="my-4">


                                            <h4 class="mb-3">Payment</h4>

                                            <div class="my-3">
                                              <div class="form-check">
                                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                                <label class="form-check-label" for="credit">Credit card</label>
                                              </div>
                                              <div class="form-check">
                                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                                <label class="form-check-label" for="debit">Debit card</label>
                                              </div>
                                              <div class="form-check">
                                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                                <label class="form-check-label" for="paypal">PayPal</label>
                                              </div>
                                            </div>

                                            <div class="row gy-3">
                                              <div class="col-md-6">
                                                <label for="cc-name" class="form-label">Name on card</label>
                                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                                <small class="text-muted">Full name as displayed on card</small>
                                                <div class="invalid-feedback">
                                                  Name on card is required
                                                </div>
                                              </div>

                                              <div class="col-md-6">
                                                <label for="cc-number" class="form-label">Credit card number</label>
                                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                                <div class="invalid-feedback">
                                                  Credit card number is required
                                                </div>
                                              </div>

                                              <div class="col-md-3">
                                                <label for="cc-expiration" class="form-label">Expiration</label>
                                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                                <div class="invalid-feedback">
                                                  Expiration date required
                                                </div>
                                              </div>

                                              <div class="col-md-3">
                                                <label for="cc-cvv" class="form-label">CVV</label>
                                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                                <div class="invalid-feedback">
                                                  Security code required
                                                </div>
                                              </div>
                                            </div>

                                            <hr class="my-4">

                                            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                                          </form>
                                        </div>
                                      </div>
                                    </main>

                                    <footer class="my-5 pt-5 text-muted text-center text-small">
                                      <p class="mb-1">&copy; 2017–2021 Company Name</p>
                                      <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#">Privacy</a></li>
                                        <li class="list-inline-item"><a href="#">Terms</a></li>
                                        <li class="list-inline-item"><a href="#">Support</a></li>
                                      </ul>
                                    </footer>
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
    

      <script src="form-validation.js"></script>
  </body>
</html>
