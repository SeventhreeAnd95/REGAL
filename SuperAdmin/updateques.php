

<?php

include '../config.php';


if(isset($_POST['topic']))
{   
    $topic= $_POST['topic'];
    
$query="SELECT id,sub_topic from regal_topics where topic='$topic' ";

$res=mysqli_query($con,$query);


    while($row=mysqli_fetch_array($res))
    {
        echo '<option value="'.$row['id'].'">'.$row["sub_topic"].'</option>';
    }
}

if(isset($_POST['getques']))
{
$subtopicid= $_POST['getques'];

$query="SELECT * from regal_questions_list where subtopicid='$subtopicid' ";

$res=mysqli_query($con,$query);
    
    while($row=mysqli_fetch_array($res))
    {
        echo '<tr>';
        echo '<td>'.$row["id"].'</td>';
        echo '<td>'.$row['question'].'</td>';
        echo '<option id="subtopicidval" value="'.$row['subtopicid'].'"></option>';
        echo '<td>'.$row["opt_a"].'</td>';
        echo '<td>'.$row["opt_b"].'</td>';
        echo '<td>'.$row["opt_c"].'</td>';
        echo '<td>'.$row["opt_d"].'</td>';
        echo '<td>'.$row["correct_ans"].'</td>';
        echo '<td>'.$row['explanation'].'</td>';
        echo'<td><button class="btn btn-secondary" onclick="editmodal()">Edit</button>&emsp;
                <button class="btn btn-danger" onclick="delques()">Delete</button></td>';
         echo'</tr>';
        
    }
        
}   

if(isset($_POST['deletesubtopicid']))
{
    $ques_id= $_POST['deletesubtopicid'];
    $query="delete from regal_questions_list where subtopicid='$ques_id' ";
    $res = mysqli_query($con,$query);
    $resrow=mysqli_fetch_array($res);

    echo $resrow['question'];
}


if(isset($_POST['deletequestion']))
{
    $question= $_POST['deletequestion'];
    $subtopicid= $_POST['deletesubtopicid'];
    $query="update regal_questions_list set question='$question' where subtopicid='$subtopicid' ";
    $res = mysqli_query($con,$query);
    echo $subtopicid;
}






                                  

    
if(isset($_POST['ques']))
{
    $theory_id=$_POST['sub-topic'];
    $ques= $_POST['ques'];
    $opta= $_POST['opta'];
    $optb= $_POST['optb'];
    $optc= $_POST['optc'];
    $optd= $_POST['optd'];
    $correctanswer= $_POST['answer'];
    $exp= addslashes($_POST['exp']);
    
    $query="INSERT INTO `regal_questions_list`(subtopicid,question,opt_a,opt_b,opt_c,opt_d,correct_ans,explanation) VALUES ('$theory_id','$ques','$opta','$optb','$optc','$optd','$correctanswer','$exp') ";

$res=mysqli_query($con,$query);

if($res)
{
    echo 'successfull';
}
else
{
    echo 'error';
}


}

?>

<script>
                    tinymce.init({

            selector:'textarea#quesholder',
            plugins: "placeholder",
            height:220,
            content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;}",
            menubar: false,
                statusbar: false,
                toolbar: false
            });
                    tinymce.init({

            selector:'textarea#expholder',
            plugins: "placeholder",
            height:220,
            content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;}",
            menubar: false,
                statusbar: false,
                toolbar: false
            });



</script>
