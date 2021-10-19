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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>UserDash</title>
    <link rel="stylesheet" href="../css/stylequiz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets1/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
   <link href="../assets1/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
         .container .card  {
            width: 18 rem;
            height: 200px;
           }
           .container{
               margin-top:20px;
           }
           .section-title p{
               text-align:center;
           }
           .section-title{
               text-align:center;
           }
           .process-item{
            height:400px;
            width: 300px;
            background-color:#f9f9f9;
            margin-left:-30px;
           }

           .main-panel{
               overflow-x: scroll;
               padding-bottom:500px;
           }

           .card .card-text{
            text-align: center;

           }
           .card p{
               margin-top:55px;
               font-size: 30px;
               font-weight:normal;
           }

           #User .card{
               height:400px;
               font-family: 'Times New Roman', Times, serif;
               text-align: center;
           }
             /* Hide scrollbar for Chrome, Safari and Opera */
                .main-panel::-webkit-scrollbar {
                display: none;
                }

                /* Hide scrollbar for IE, Edge and Firefox */
                .main-panel {
                -ms-overflow-style: none;  /* IE and Edge */
                scrollbar-width: none;  /* Firefox */
                }

                .d-flex a{
                    text-decoration:none; 
                    color:#333;
                }
                
                        
    </style>
  </head>
  <body>
      <main>
      <div class="wrapper ">
            <?php include("sidebar.php"); ?>
                <div class="main-panel">
                            <!-- Navbar -->
                            <?php include("Navigation1.php"); ?>
                            <!-- End Navbar -->
                            <div class="content">


                                <div class="start_btn"><button>Start Quiz</button></div>
                                

                                <!-- Info Box -->
                                <div class="info_box">
                                    <div class="info-title"><span>Some Rules of this Quiz</span></div>
                                    <div class="info-list">
                                        <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
                                        <div class="info">2. Once you select your answer, it can't be undone.</div>
                                        <div class="info">3. You can't select any option once time goes off.</div>
                                        <div class="info">4. You can't exit from the Quiz while you're playing.</div>
                                        <div class="info">5. You'll get points on the basis of your correct answers.</div>
                                    </div>
                                    <div class="buttons">
                                        <button class="quit">Exit Quiz</button>
                                        <button class="restart">Continue</button>
                                    </div>
                                </div>

                                <!-- Quiz Box -->
                                <div class="quiz_box">
                                    <header>
                                        <div class="title">Awesome Quiz Application</div>
                                        <div class="timer">
                                            <div class="time_left_txt">Time Left</div>
                                            <div class="timer_sec">15</div>
                                        </div>
                                        <div class="time_line"></div>
                                    </header>
                                    <section>
                                        <div class="que_text">
                                            <!-- Here I've inserted question from JavaScript -->
                                        </div>
                                        <div class="option_list">
                                            <!-- Here I've inserted options from JavaScript -->
                                        </div>
                                    </section>

                                    <!-- footer of Quiz Box -->
                                    <footer>
                                        <div class="total_que">
                                            <!-- Here I've inserted Question Count Number from JavaScript -->
                                        </div>
                                        <button class="next_btn">Next Que</button>
                                    </footer>
                                </div>

                                <!-- Result Box -->
                                <div class="result_box">
                                    <div class="icon">
                                        <i class="fas fa-crown"></i>
                                    </div>
                                    <div class="complete_text">You've completed the Quiz!</div>
                                    <div class="score_text">
                                        <!-- Here I've inserted Score Result from JavaScript -->
                                    </div>
                                    <div class="buttons">
                                        <button class="restart">Replay Quiz</button>
                                        <button class="quit">Quit Quiz</button>
                                    </div>
                                </div>
</main>



    <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#" style="text-decoration:none; color:#333;">Privacy Policy</a>
                                &middot;
                                <a href="#" style="text-decoration:none; color:#333;">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
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
    
    <script src="../js/questions.js"></script>

    
    <script src="../js/script.js"></script>



    
    

      
    <script src="../js/bootstrap.bundle.min.js"></script>
    

  </body>
</html>