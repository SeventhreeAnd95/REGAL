<?php

include '../config.php';
?>

<!DOCTYPE html>
<html lang="en">

        <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.css" rel="stylesheet">
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                  <script src="https://cdn.tiny.cloud/1/ksu5xkz6l0uey7t72cqhqumj5bvxty1gipxsit63vmmcan8b/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
                  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
                  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
                  <!-- CSS Files -->
                  <link href="../assets1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets1/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets1/demo/demo.css" rel="stylesheet" />
                  <title>Regal Test</title>
                  <style>
                      nav .collapse{
                          margin-left: 300px;
                      }
                      
                                  #editques .mb-4{
                                    display:flex; 
                                    align-items: center;
                                  }
                                 

                                  .mb-4{
                                    display:flex;
                                     align-items: center;
                                  }
                                  
                                  .quesrow #Exit{
                                    margin-left:1060px;
                                  }
                                  #editques .textarea p{
                                      color: black !important;
                                  }
                                  

                                  .m-2{width: 55%;}
                      </style>
        </head>
        <body>
        <div class="wrapper ">
          <?php include("sidebar.php"); ?>
            <div class="main-panel">
              <!-- Navbar -->
              <?php include("Navigation1.php"); ?>
              <!-- End Navbar -->
              <div class="content">
            <div class="containermenu" style="max-width:fit-content; ">
                <h2 class="title is-20 m-5 ">Questions List</h2>

                <div class="select mb-3">
                    <select name="topic" id="topic" onchange="getsubtopic(this.value)">
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
                    <select id="sub-topic" name="sub-topic" onchange="">
                        <option value="" disabled selected hidden>Choose Sub-Topic</option>
                       <?php 
                                
                            $query="SELECT id,sub_topic from regal_topics where topic='$topic' ";

                            $res=mysqli_query($con,$query);


                                while($row=mysqli_fetch_array($res))
                                {
                                    echo '<option value="'.$row['id'].'">'.$row["sub_topic"].'</option>';
                                }
                            ?>
                    </select>
                </div>
                <button class="button is-success" onclick="getsubtopicid()">Display</button>
                <div class="box p-2">
                    <div class="tablecontainer" style="overflow-x: auto;">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th>Sl.No</th>
                                    <th style="width: 20%;">Question</th>
                                    <th>Option A</th>
                                    <th>Option B</th>
                                    <th>Option C</th>
                                    <th>Option D</th>
                                    <th>Correct Answer</th>
                                    <th style="width: 20%;">Explanation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            
                            <tbody id="questiondet">
                                           

                           </tbody>
                                        
                        </table>

                        <?php  
                            if(isset($_GET['subtopicid']))
                            {
                                $subid=$_GET['subtopicid'];

                            $upquery="";
                            }
                        
                        ?>
                        <div class="modal" id="editques">
                            <div class="modal-content">
                                <div class="box">
                    <?php   $query="SELECT * from regal_questions_list ";

                                    $res=mysqli_query($con,$query);
                                        
                                        while($row=mysqli_fetch_array($res))
                                        {
                          echo'<textarea class="textarea is-info" id="ques" value="'.$row['question'].'" ></textarea>';
                          echo  '<br>';
                          echo  '<div class="mb-4"><input type="radio" class="m-2"
                                    name="answer"><input class="input is-info " id="optiona" value="'.$row['opt_a'].'" type="text"
                                    placeholder="Option A" style="width:200px;!important"></div>';
                          echo '<div class="mb-4"><input type="radio" class="m-2"
                                    name="answer"><input class="input is-info " id="optionb"value="'.$row['opt_b'].'" type="text" 
                                    placeholder="Option B" style="width:200px;!important"></div>';
                          echo   '<div class="mb-4"><input type="radio" class="m-2"
                                    name="answer"><input class="input is-info " id="optionc" value="'.$row['opt_c'].'" type="text" 
                                    placeholder="Option C" style="width:200px;!important"></div>';
                          echo  '<div class="mb-4"><input type="radio" class="m-2"
                                    name="answer"><input class="input is-info " id="optiond" value="'.$row['opt_d'].'" type="text" 
                                    placeholder="Option D" style="width:200px;!important"></div>';
                         echo   '<textarea class="textarea is-info" id="exp" value="'.$row['explanation'].'" ></textarea>';
                                         } ?>
                            

                                </div>
                                <div class="quesrow">


                                    <div>
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="button" id="Exit" class="btn btn-danger" onclick="closemodal()">Exit</button>
                                    </div>
                                    
                                </div>
                            </div>
                            <button class="modal-close is-large" aria-label="close" onclick="closemodal()"></button>
                        </div>
                    </div>
                </div>




            </div>
            </div>
            </div>
            </div>
        </body>
    <script src="../js/index.js"></script>
    <script>
            function getsubtopic(topicname) {
                $('#sub-topic').html('');
                $.ajax({
                    url: "updateques.php",
                    method: "POST",
                    data: { topic: topicname },
                    success: function (data) {
                        $('#sub-topic').html(data);
                    }
                })
            }
            function getsubtopicid() {
                var subtopicid = document.getElementById('sub-topic').value;

                $.ajax({
                    url: "updateques.php",
                    method: "POST",
                    data: { getques: subtopicid },
                    success: function (data) {
                        $('#questiondet').html(data);
                    }
                })
            }

            tinymce.init({

selector:'textarea#ques',
plugins: "placeholder",
height:120,
content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;color:black!important;}",
menubar: false,
    statusbar: false,
    toolbar: false
});
tinymce.init({

selector:'textarea#exp',
plugins: "placeholder",
height:120,
content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;color:black!important}",
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
    <script>
        function editmodal() {
            var edit = document.getElementById("editques");
            edit.classList.add("is-active");
            // location.href = "viewquestions.php?subtopicid=" + subid;
            
        }
        function deleteques(subtopicid, ques)
                {
                    $.ajax({
                url:"updateques.php",
                method:"POST",
                data:{deletesubtopicid: subtopicid,
                deletequestion:ques
                },
            
                success: function(data){
                alert('Succesfully Deleted');
                location.reload();
                }
                })
                }

        function closemodal() {
            var edit = document.getElementById('editques');
            edit.classList.remove('is-active');
        }
    </script>
    script src="../assets1/js/core/jquery.min.js"></script>
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