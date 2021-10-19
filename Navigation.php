

<?php
$_SESSION['current'] = 'home';
include "config.php";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="google-signin-client_id" content="824453843882-0k6l7s4291qr03sggpndsarlgnoj9q1l.apps.googleusercontent.com">
        <title>Regal</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
        <link href="css/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- <link href="css/navigation.css" rel="stylesheet"/> -->
        <style>
            body {
                font-family: 'Varela Round', sans-serif;
            }
            .modal-login {		
                color: #636363;
                width: 350px;
            }
            
            .modal-login .modal-content {
                padding: 20px;
                border-radius: 5px;
                border: none;
            }
            .modal-login .modal-header {
                border-bottom: none;   
                position: relative;
                justify-content: center;
            }
            .modal-login h4 {
                text-align: center;
                font-size: 26px;
                margin: 30px 0 -15px;
            }
            .modal-login .form-control:focus {
                border-color: #70c5c0;
            }
            .modal-login .form-control, .modal-login .btn {
                min-height: 40px;
                border-radius: 3px; 
            }
            .modal-login .close {
                position: absolute;
                top: -5px;
                right: -5px;
            }	
            .modal-login .modal-footer {
                background: #ecf0f1;
                border-color: #dee4e7;
                text-align: center;
                justify-content: center;
                margin: 0 -20px -20px;
                border-radius: 5px;
                font-size: 13px;
            }
            .modal-login .modal-footer a {
                color: #999;
            }		
            .modal-login .avatar {
                position: absolute;
                margin: 0 auto;
                left: 0;
                right: 0;
                top: -70px;
                width: 95px;
                height: 95px;
                border-radius: 50%;
                z-index: 9;
                background: #60c7c1;
                padding: 15px;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
            }
            .modal-login .avatar img {
                width: 100%;
            }
            .modal-login.modal-dialog {
                margin-top: 80px;
            }
            .modal-login .btn, .modal-login .btn:active {
                color: #fff;
                border-radius: 4px;
                background: transparent;
                text-decoration: none;
                transition: all 0.4s;
                line-height: normal;
                border: none;
            }
            .modal-login .btn:hover, .modal-login .btn:focus {
                background: transparent;
                outline: none;
            }
            .trigger-btn {
                display: inline-block;
                margin: 100px auto;
            }

            #my-signin2{
                margin-left: 90px;
                 padding: 10px;
                }

                h5{
                    text-align: center;
                     padding: 20px;
                }

                p{
                    text-align: center;
                }
                .modal-header .bi{
                    color: black;
                    font-size:xx-large;
                    margin-left:90px;
                }

                .modal-header h4{
                    margin-left: 100px;
                }
        </style>
    </head>

 
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="index.php">REGAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="Google_Login.php" data-toggle="modal" data-target="#myModal">Google Login</a>
                <li class="nav-item"><a class="nav-link" href="Signup.php">Signup</a></li>
                <li class="nav-item"><a class="nav-link" href="Login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="blog-home.php">Blog</a></li>      
            </ul>
        </div>
    </div>
</nav>


<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
								
				<h4 class="modal-title">Member Login</h4>	
                <button type="button" class="btn btn-light" data-dismiss="modal" aria-hidden="true"><i class="bi bi-x"></i></button>
			</div>
			<div class="modal-body">
				<form>
					<p>Select the test option as per your JOB type

                        You have to use Laptop or Desktop with Mic and Speaker
                        
                        REGAL test should be taken in Silent place</p>

                        <h5>Login To REGAL Using Google Sign In.</h5>
                        <div id="my-signin2"></div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#">.</a>
			</div>
		</div>
	</div>
</div>  
<script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    }

    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
</script>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
</body>
</html>






























































































<!---------------Abhishek B N------------->