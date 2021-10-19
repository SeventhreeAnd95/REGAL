<?php
include '../config.php'
?>
<!DOCTYPE html>
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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../css1/bootstrap.min.css" rel="stylesheet" />
  <link href="../css1/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <style>
      .content #form .container{
          margin-top:60px;
      }

      .content #form .container .card{
          background-color:#F5F5F5;
      }
  </style>
</head>
<body>
  <div class="wrapper ">
  <?php include("sidebar.php"); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include("Navigation1.php"); ?>
      <div class="content">
      <div class="row" id="form">
      <div class="container">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pricing</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text"></p><form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" value="" required>
                                <div class="valid-feedback">
                                
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Membership Amount</label>
                                <input type="text" class="form-control" id="validationCustom02" value="" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustomUsername" class="form-label">Referred by</label>
                                <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    option= silver, gold
                                </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom03" class="form-label">Start Time</label>
                                <input type="time" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                Please provide.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Membership type</label>
                                <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Choose...</option>
                                <option>Gold</option>
                                <option>Silver</option>
                                </select>
                                <div class="invalid-feedback">
                                Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">End Time</label>
                                <input type="time" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                </div>
                </div>
</div>
      </div>
      </div>
      <footer class="footer footer-black footer-absolute fixed-bottom  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">REGAL</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

 
<script src="../js/sidebars.js"></script>
    <script src="https://kit.fontawesome.com/0199a63e68.js" crossorigin="anonymous"></script>
    <script src="../js1/core/jquery.min.js"></script>
  <script src="../js1/core/popper.min.js"></script>
  <script src="../js1/core/bootstrap.min.js"></script>
  <script src="../js1/plugins/perfect-scrollbar.jquery.min.js"></script>
 
  <script src="../js1/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  </body>
</html>