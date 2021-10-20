<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/ksu5xkz6l0uey7t72cqhqumj5bvxty1gipxsit63vmmcan8b/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="../css/dashboard.css" rel="stylesheet">
    <link href="../css/config.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../css1/bootstrap.min.css" rel="stylesheet" />
  <link href="../css1/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <title>Regal Test</title>
    <style>
        .tablecontainer tbody th h2{
            font-family: 'Times New Roman', Times, serif;
            font-size:large;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <script>
        function getsubtopic(topicname) {

            $('#sub-topic').html('');


            $.ajax({
                url: "updatetheory.php",
                method: "POST",
                data: { topic: topicname },
                success: function (data) {
                    $('#sub-topic').html(data);
                }
            })



        }
      



    </script>
    <div class="wrapper ">
  <?php include("sidebar.php"); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include("Navigation1.php"); ?>
      <!-- End Navbar -->
      <div class="content">

    <div class="containermenu">
        <h2 class="title is-20 m-5 ">Theory List</h2>
        <div class="select mb-3">
            <?php
             include '../config.php';
        if(isset($_GET['topic'])){  
            echo '<select name="topic" id="topic" onchange="    ">';
             echo '<option value="'.$_GET['topic'].'">'.$_GET["topic"].'</option></select>';
        }
        else
        {
         ?>
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
            <?php
            }
            ?>
        </div>
        <script type="text/javascript">
            function getsubtopic(topic) {
                location.href = "viewtheory.php?topic=" + topic;
            }
        </script>
        <div class="box p-2">
            <div class="tablecontainer" style="overflow-x: auto;">
                <table class="table" style="width:100% !important;">
                    <thead>
                        <tr>
                            <th>Sl.No</th>
                            <th>Sub-Topic</th>
                            <th>Theory</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                    if(isset($_GET['topic'])){
                        $topics=$_GET['topic'];
                        $sql="select * from regal_topics where topic='$topics'";
                        $res=mysqli_query($con,$sql);
                        $i=1;
                        while($rowsql=mysqli_fetch_array($res)){
                           $id=$rowsql['id'];
                                $sqlname="select * from regal_theory_list where subtopicid='$id'";
                                $resqqlname=mysqli_query($con,$sqlname);
                                while($rwsql=mysqli_fetch_array($resqqlname)){
                                ?>
                        <tr>
                          <th><?php echo $i;?></th>
                            <th>
                                <h2 class="subtitle is-10">
                                <?php echo $rowsql['sub_topic'];?>
                                </h2>
                            </th>
                            <th><button class="btn btn-primary" type="button" id="theorybtn" onclick="opentheory('<?php echo $rwsql['subtopicid']; ?>')">View Theory</button></th>

                            <th><button class="btn btn-secondary" onclick="editmodal('<?php echo $rwsql['subtopicid']; ?>')">Edit</button></th>
                            <th><button class="btn btn-danger" onclick="deletequestion('<?php echo $rwsql['subtopicid'];?>')">Delete</button></th>
                        </tr>
                        <?php
                        $i++;
                    }
                }
            }?>
                    </tbody>
                </table>

                <div class="modal" id="modal">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                       
                    <div class="box" id="editTheory">
                    <br>
                        



                        </div>
                        <div class="quesrow">

                            <div>
                                <button onclick="updatetheory(document.getElementById('subtopicidval').value,document.getElementById('edittext').value)" name="submittheory" class="button is-normal is-success">
                                    <span class="material-icons">
                                        save
                                    </span>Save
                                </button>

                                </form>
                            </div>
                        </div>
                        <button class="modal-close is-large" aria-label="close" onclick="closemodal()"></button>
                    </div>

                </div>
                <div class="modal" id="opentheory">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <div class="box">
                            <div class="content is-normal" id="modalContent">




                            </div>
                        </div>
                    </div>
                    <button class="modal-close is-large" aria-label="close" onclick="closetheory()"><button>
                </div>
            </div>




        </div>
    </div>
      </div>
    </div>
    </div>
    <script src="../javascript/index.js"></script>
<script>
    function deletequestion(subtopicid, theory)
    {
        $.ajax({
    url:"updatetheory.php",
    method:"POST",
    data:{deletesubtopicid: subtopicid,
    deletetheory:theory
    },
  
    success: function(data){
     alert('Succesfully Deleted');
     location.reload();
    }
    })
    }

    function updatetheory(subtopicid,theory)
    {
        $.ajax({
    url:"updatetheory.php",
    method:"POST",
    data:{savesubtopicid: subtopicid,
    savetheory:theory
    },
  
    success: function(data){
     alert('Succesfully Saved');
     location.reload();
    }
    
   })        

    }
    function editmodal(contentid) {
        var edit = document.getElementById("modal");
        edit.classList.add("is-active");

        
        $.ajax({
    url:"updatetheory.php",
    method:"POST",
    data:{subtopicid: contentid},
    success: function(data){
     $('#editTheory').html(data);
     

    }
   })        
    }

    function closemodal() {
        var edit = document.getElementById('modal');
        edit.classList.remove('is-active');
    }
    function opentheory(contentid) {
       

            $.ajax({
        url:"updatetheory.php",
        method:"POST",
        data:{theoryview: contentid},
        success: function(data){
        $('#modalContent').html(data);
        

        }
    })        
        
    }

    function closetheory() {
        var edit = document.getElementById('opentheory');
        edit.classList.remove('is-active');
    }

</script>
</body>


</html>