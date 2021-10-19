<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/ksu5xkz6l0uey7t72cqhqumj5bvxty1gipxsit63vmmcan8b/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="../css/regal.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../css1/bootstrap.min.css" rel="stylesheet" />
  <link href="../css1/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <title>Regal Test</title>
</head>
<style>
      @media (max-width: 768px)
  {
      .container
      {
         width: 98% !important;
         
      }
  }

  .container{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    padding: 20px;
    width:60%;
    margin:auto;
  }

  .quesrow .button{
    color:black;
  }
  
  .box #sub-topic{
      float:right;
      margin-top:-40px;
  }
  .box #theory{
      margin-top:30px;
  }
  .container .title{
      font-family:Arial, Helvetica, sans-serif;
      font-size:xx-large;
  }
  text-area{
    margin-top:30px;
  }
</style>
<body>
<div class="wrapper ">
  <?php include("sidebar.php"); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include("Navigation1.php"); ?>
      <!-- End Navbar -->
      <div class="content">

    <div class="container mt-4">
    <h2 class="title is-4 mt-2">Add Theory</h2>
       
        <div class="box">
            <div class="inline-float">
                        <div class="select mb-3">
                            <form action="updatetheory.php" method="post" >
                            <select name="topic" id="topic" onchange="getsubtopic(this.value)">
                                <option value="" disabled selected hidden>Choose Topic</option>
                                
                                <?php include '../config.php';
                                $sql="SELECT DISTINCT topic from regal_topics";
                                $res=mysqli_query($con,$sql);
                                while( $row=mysqli_fetch_assoc($res))
                                {
                                    echo '<option value="'.$row['topic'].'">'.$row["topic"].'</option>';
                                }
                                ?>
                                
                            </select>
                        </div>
                        <div class="select mb-3">
                            <select id="sub-topic" name="sub-topic">
                                <option value="" disabled selected hidden>Choose Sub-Topic</option>
                                
                            </select>
                        </div>
            </div>
             



            
        </div>
        <div class="text-area">
            <textarea name="theory" id="theory" class="textarea is-info" placeholder="Enter Theory" rows="10"></textarea>
            <br>
        </div>
        <div class="quesrow">
            <div>
            <button type="button" class="btn btn-danger">Cancel</button>&emsp;
               
                
            </div>
            <div>
                
                <button type="submit" name="addtheory"  class="btn btn-success">Save</button>
               
                
            </div>
            </form>
            
        </div>


    </div>
      </div>

      <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
</footer>
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
  <script src="../assets1/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets1/demo/demo.js"></script>
    <script>
 function getsubtopic(topicname)
 {
     
    $('#sub-topic').html('');

     
    $.ajax({
    url:"updatetheory.php",
    method:"POST",
    data:{topic: topicname},
    success: function(data){
     $('#sub-topic').html(data);
    }
   })



 }
  

 
 tinymce.init({

selector:'textarea#theory',
plugins: "placeholder",
height:220,
content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;}",
  menubar: false,
    statusbar: false,
    toolbar: false
});

</script>    
    <script src="../javascript/index.js"></script>
</body>

</html>