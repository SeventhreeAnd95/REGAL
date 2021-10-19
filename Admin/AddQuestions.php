<?php
$_SESSION['current'] = 'home';
include("../config.php");

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <style>
      @media (max-width: 768px)
  {
      .container
      {
         width: 98% !important;
      }
  }
  nav .collapse{
            margin-left: 300px;
        }
        nav{
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    }
                    .box .inline #sub-topic{
                        float: right;
                    }
                    .inline #topic{
                        float:left;
                    }
</style>
    <title>Regal Test</title>
</head>

<body>
  
<div class="wrapper ">
  <?php include("sidebar.php"); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include("Navigation1.php"); ?>
      <!-- End Navbar -->
      <div class="content">


        

                <div class="container mt-4" style="padding: 20px;width:60%;margin:auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <h2 class="title is-4 mt-2">Add Questions</h2>
                
                    <div class="box">
                        <form action="updateques" meho>
                        <div class="select mb-3">
                        <div class="inline">
                            <select name="topic" id="topic" onchange="getsubtopic(this.value)" >
                                <option value="" disabled selected hidden>Choose Topic</option>
                                
                                <?php 
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
                            <select id="sub-topic" name="sub-topic" >
                                <option value="" disabled selected hidden>Choose Sub-Topic</option>
                                
                            </select>
                        </div>
                        </div>
                        
                        <textarea class="textarea is-info" id="ques" name="ques"  placeholder="Enter Question"></textarea>
                        <br>
                        <div style="display:flex; align-items: center;" class="mb-4">
                        <input type="radio" id="answer"  value="A" class="m-2" name="answer" required>
                        <input class="input is-info " type="text" id="optiona" name="opta" style="width: 95%;" placeholder="Option A">
                        </div>
                        <div style="display:flex; align-items: center;" class="mb-4">
                        <input type="radio" id="answer" value="B" class="m-2" name="answer" required>
                        <input class="input is-info " type="text" id="optionb" name="optb" style="width: 95%;" placeholder="Option B">
                        </div>
                        <div style="display:flex; align-items: center;" class="mb-4">
                        <input type="radio" id="answer" value="C" class="m-2" name="answer" required>
                        <input class="input is-info " type="text" id="optionc" name="optc" style="width: 95%;" placeholder="Option C">
                        </div>
                        <div style="display:flex; align-items: center;" class="mb-4">
                        <input type="radio" id="answer" value="D" class="m-2" name="answer" required>
                        <input class="input is-info " type="text" id="optiond" name="optd" style="width: 95%;" placeholder="Option D">
                        </div>
                        <textarea class="textarea is-info" id="exp" name="exp" placeholder="Enter Explanation"></textarea>


                        
                    </div>
                    <div class="quesrow">
                        <div>
                        <button type="button" class="btn btn-danger">Cancel</button>
                            </button>&emsp;
                        
                            
                        </div>
                        <div>
                            <button type="button" name="addques" id="addques" onclick="steps_taskdesc()" class="btn btn-success">Save</button>
                        </form>
                    
                        </div>
                    
                    </div>


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
</body>
<script>

                    function getsubtopic(topicname)
                    {
                        
                        $('#sub-topic').html('');

                        
                        $.ajax({
                        url:"updateques.php",
                        method:"POST",
                        data:{topic: topicname},
                        success: function(data){
                        $('#sub-topic').html(data);
                        }
                    })



                    }
                    
                    
                    tinymce.init({

                    selector:'textarea#ques',
                    plugins: "placeholder",
                    height:120,
                    content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;}",
                    menubar: false,
                        statusbar: false,
                        toolbar: false
                    });
                    tinymce.init({

                    selector:'textarea#exp',
                    plugins: "placeholder",
                    height:120,
                    content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;}",
                    menubar: false,
                        statusbar: false,
                        toolbar: false
                    });
                    tinymce.init({

                    selector:'input#optiona',
                    plugins: "placeholder",
                    height:45,
                    content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;overflow-y:hidden!important;line-height:0.9;}",
                    menubar: false,
                        statusbar: false,
                        toolbar: false
                    });
                    tinymce.init({

                    selector:'input#optionb',
                    plugins: "placeholder",
                    height:45,
                    content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;overflow-y:hidden!important;line-height:0.9;}",
                    menubar: false,
                        statusbar: false,
                        toolbar: false
                    });
                    tinymce.init({

                    selector:'input#optionc',
                    plugins: "placeholder",
                    height:45,
                    content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;overflow-y:hidden!important;line-height:0.9;}",
                    menubar: false,
                        statusbar: false,
                        toolbar: false
                    });
                    tinymce.init({

                    selector:'input#optiond',
                    plugins: "placeholder",
                    height:45,
                    content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;overflow-y:hidden!important;line-height:0.9;}",
                    menubar: false,
                        statusbar: false,
                        toolbar: false
                    });

    </script>
<script src="../js/index.js"></script>
<script>
                function steps_taskdesc(){
                    $("#addques").attr("disabled", true);
                var ques = tinymce.EditorManager.get('ques').getContent({format : 'raw'});
                var opta = tinymce.EditorManager.get('optiona').getContent({format : 'raw'});
                var optb = tinymce.EditorManager.get('optionb').getContent({format : 'raw'});
                var optc = tinymce.EditorManager.get('optionc').getContent({format : 'raw'});
                var optd = tinymce.EditorManager.get('optiond').getContent({format : 'raw'});
                var subtopicid = $("#sub-topic").val();
                var correct_ans;
                var selected = $("input[name='answer']:checked");
                if (selected.length > 0) {
                    correct_ans = selected.val();
                }
                // alert(correct_ans);
                var exp = tinymce.EditorManager.get('exp').getContent({format : 'raw'});

                ques = ques.replace(/&nbsp;/gi,' ');
                ques = ques.replace(/amp;/gi,''); 
                ques = ques.replace(/&/gi,'%26'); 
                ques = encodeURIComponent(ques);

                exp = exp.replace(/&nbsp;/gi,' ');
                exp = exp.replace(/amp;/gi,''); 
                exp = exp.replace(/&/gi,'%26'); 
                exp = encodeURIComponent(exp);
                if((opta == "" ) || (optb  == "") || (optc  == "") || (optd  == "") || (correct_ans  == "") || (exp  == "") || (ques  == "") ){
                    alert("Please fill all the fields");
                    $("#addques").attr("disabled", false);
                    return false;
                }
                else{
                    
                }
                var data = 'ques='+ques+"&opta="+opta+"&sub-topic="+subtopicid+"&optb="+optb+"&optc="+optc+"&optd="+optd+"&answer="+correct_ans+"&exp="+exp;
                $.ajax({
                        url: "updateques.php",
                        method:"POST",
                        data: data,
                        success: function(res) {
                            alert(res);
                            window.location.reload();
                        }
                    });
                    
                } 

</script>
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
</html>