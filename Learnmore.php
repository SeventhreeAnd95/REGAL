
<?php
session_start();
$_SESSION['current'] = 'home';
include("config.php");
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>REGAL</title>
    <link rel="stylesheet" href="css/w3.css">
        <!-- CSS only -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap icons-->
        <link href="css/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/navigation.css" rel="stylesheet"/>
        <style>
            .Regal-certified{
                background-image: url(images/1951602.jpg); 
                padding-bottom: 10px;
            }
            .flex-container div{
                text-align: justify; 
                height: 250px; 
                width: 500px;
                margin-right: 30px;
            }

            h5{
                padding-top: 5px; 
                margin: 20px;
                color: aliceblue;
            }

            p{
                margin: 20px;
                padding-bottom: 20px;
                color: aliceblue;
            }
            .flex-container{

                display: flex; 
                 padding-left: 30px; 
                 text-align: center; 
                 justify-content: center;
                 padding-top: 80px;
            }
            h2,h1{
                padding-left: 30px;
                padding-top: 40px;
                 color: aliceblue;
            }

            .flex-container div{
                text-align: justify;
                 height: 250px; 
                 width: 500px; 
                 margin-right: 30px;
            }

            .flex-container #regal{
                text-align: justify; 
                height: 550px;
                width: 500px;
                border-radius: 50px;
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
                <li class="nav-item"><a class="nav-link" href="Login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="Signup.php">Signup</a></li>
                <li class="nav-item"><a class="nav-link" href="blog-home.php">Blog</a></li>      
            </ul>
        </div>
    </div>
</nav>
  <main>

  <section>
        <div class="Regal-certified">
            <h1> Why get Regal certified?</h1>
            <p style="padding-top: 50px; padding-left: 40px;color: aliceblue;">Earn a well-respected credential to demonstrate IT expertise in the marketplace.</p>
            <div class="flex-container">
                <div>
                <h5>Marketability</h5>
                    <p>Gain a competitive advantage by developing a skill set that's in demand, in India.</p>
                </div>
                <div>
                <h5>Advancement</h5>
                    <p>Join the Regal certification holders who reported a promotion, salary increase, or other career improvements. </p>
                </div>
                <div >
                <h5>Recognition</h5>
                    <p>Download your digital certification badge and add it to your social media profiles to stand out.</p>
                </div>
            </div>
    </section>
    <section style="padding-bottom: 200px; background-image: url(images/Word-Art-1.png) ;background-size: contain;background-repeat: no-repeat;background-position: 50%;">
        <div class="header">
             <h5 style="padding-left: 30px; padding-top: 100px;text-align: left;padding-top: 130px;"></h5>
             <h4 style="padding-left:30px;padding-top: 30px;"></h4>
        </div>
     </section>
     <section style="padding-bottom: 100px; background-image: url(images/1852725.jpg);background-size:cover; ">
        <h2>Get Regal Certified</h2>
        <div class="flex-container" id="regal">
            <div>
                <img src="images/oracle.png" height="200px" width="200px" style="position: relative; bottom: 40px;">
            <h5>Get your certification</h5>
                <p>Explore certification requirements, paths you can follow to prepare for specific job roles, recommended training, exams, and more.</p>
                <button type="button" class="btn" style=" background-color:black; margin-left: 30px; color: whitesmoke;"><a style="color: aliceblue;text-decoration:none;" href="Login.php">Get Started</a></button>
            </div>
            <div>
                <img src="images/oracle1.png" height="200px" width="200px" style="position: relative; bottom: 40px;">
            <h5>Prepare for your exam</h5>
                <p>Preparing for your certification exam teaches you how to implement, develop and administer critical systems. Passing your exam proves you're an expert in the global IT industry.</p>
                <button type="button" class="btn" style=" background-color:black; margin-left: 30px; color: whitesmoke;"><a style="color: aliceblue;text-decoration:none;" href="Login.php"> View Training</a></button>
            </div>
            <div style="text-align: justify; height: 550px; width: 500px; margin-right: 30px; border-radius: 50px;">
                <img src="images/oracle2.png" height="200px" width="200px" style="position: relative; bottom: 40px;">
            <h5>Take your exam</h5>
                <p>Choose a date and register for your exam. If you're not quite ready, practice with the content by logging in and schedule your exam whenever you are ready to take it. </p>
                <button type="button" class="btn" style=" background-color:black; margin-left: 30px; color: whitesmoke;"><a style="color: aliceblue;text-decoration:none;" href="Login.php"> Register</a></button>
            </div>
        </div>
    </section>
  </main>
  <?php include("footer.php"); ?>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>