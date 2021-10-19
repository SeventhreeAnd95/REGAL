

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
  
  <!-- Bootstrap icons -->
  <link href=https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css rel="stylesheet">
  <link rel="stylesheet" href="../css/all.css">
    <link href="../css/styles.css" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../css1/bootstrap.min.css" rel="stylesheet" />
  <link href="../css1/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../demo1/demo.css" rel="stylesheet" />
 
 <style>
        
    .avatar-xl img {
        width: 110px;
    }
    .rounded-circle {
        border-radius: 50% !important;
    }
    img {
        vertical-align: middle;
        border-style: none;
    }
    .text-muted {
        color: #aeb0b4 !important;
    }
    .text-muted {
        font-weight: 300;
    }
    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1.5;
        color: #4d5154;
        background-color: #ffffff;
        background-clip: padding-box;
        border: 1px solid #eef0f3;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    
    main{
        margin-top: 50px;
       
    }
    nav .collapse{
            margin-left: 300px;
        }
        nav{
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    }
                   

                    .card {
                        margin: 100px;
                    }

                    footer .d-flex a{
                        color:black;
                    }
                    footer .d-flex .text-muted{
                        color:black;
                    }
                    form .btn{
                        background-color: #66615B;
                    }
                    

    
    </style>
  <title>Admin</title>
  
</head>
<body>
  <div class="wrapper ">
  <?php include("sidebar.php"); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include("Navigation1.php"); ?>
      <!-- End Navbar -->
      <div class="content">
                <div class="card">
                    <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                                <h2 class="h3 mb-4 page-title">Settings</h2>
                                <div class="my-4">
                                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Profile</a>
                                        </li>
                                    </ul>
                                    <form class="row g-3 needs-validation">
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress2" class="form-label">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputState" class="form-label">State</label>
                                            <select id="inputState" class="form-select">
                                                    <option selected="">Choose...</option>
                                                    <option>Andhra Pradesh</option>
                                                    <option>Arunachal Pradesh</option>
                                                    <option>Assam</option>
                                                    <option>Bihar</option>
                                                    <option>Chhattisgarh</option>
                                                    <option>Goa</option>
                                                    <option>Gujarat</option>
                                                    <option>Haryana</option>
                                                    <option>Himachal Pradesh</option>
                                                    <option>Jharkhand</option>
                                                    <option>Karnataka</option>
                                                    <option>Kerala</option>
                                                    <option>Madhya Pradesh</option>
                                                    <option>Maharashtra</option>
                                                    <option>Manipur</option>
                                                    <option>Meghalaya</option>
                                                    <option>Mizoram</option>
                                                    <option>Nagaland</option>
                                                    <option>Odisha</option>
                                                    <option>Punjab</option>
                                                    <option>Rajasthan</option>
                                                    <option>Sikkim</option>
                                                    <option>Tamil Nadu</option>
                                                    <option>Telangana</option>
                                                    <option>Tripura</option>
                                                    <option>Uttar Pradesh</option>
                                                    <option>Uttarakhand</option>
                                                    <option>West Bengal</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="inputZip" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                    </div>
                
        </div>
        <?php include("Footer.php"); ?>
        </div>
</div>

            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function () {
                    'use strict'

                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.querySelectorAll('.needs-validation')

                    // Loop over them and prevent submission
                    Array.prototype.slice.call(forms)
                        .forEach(function (form) {
                        form.addEventListener('submit', function (event) {
                            if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                            }

                            form.classList.add('was-validated')
                        }, false)
                        })
                    })()
                </script>
            <script src="../js/scripts.js"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

</body>

</html>