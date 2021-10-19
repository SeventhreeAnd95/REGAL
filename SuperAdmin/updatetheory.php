<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://cdn.tiny.cloud/1/ksu5xkz6l0uey7t72cqhqumj5bvxty1gipxsit63vmmcan8b/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>







<body>




<script>
        tinymce.init({

selector:'textarea#edittext',
plugins: "placeholder",
height:220,
content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;}",
  menubar: false,
    statusbar: false,
    toolbar: false
});



</script>

<?php

include '../config.php';


if(isset($_POST['theoryview']))
{
$theory_id= $_POST['theoryview'];
$query="SELECT * from regal_theory_list where subtopicid='$theory_id' ";
$res = mysqli_query($con,$query);
$resrow=mysqli_fetch_array($res);
 
echo $resrow['theory'];
}

if(isset($_POST['deletesubtopicid']))
{
    $theory_id= $_POST['deletesubtopicid'];
    $query="delete from regal_theory_list where subtopicid='$theory_id' ";
    $res = mysqli_query($con,$query);
    $resrow=mysqli_fetch_array($res);

    echo $resrow['theory'];
}





if(isset($_POST['subtopicid']))
{
$theory_id= $_POST['subtopicid'];
$query="SELECT * from regal_theory_list where subtopicid='$theory_id' ";
$res = mysqli_query($con,$query);
$resrow=mysqli_fetch_array($res);
echo '<textarea class="textarea is-info" id="edittext"  name="edittheory"  placeholder="Enter Theory" rows="22">'.$resrow['theory'].'</textarea>';
echo '<option id="subtopicidval" style="display:none;" value="'.$theory_id.'"></option>';
}

if(isset($_POST['savetheory']))
{
    $theory= $_POST['savetheory'];
    $subtopicid= $_POST['savesubtopicid'];
    $query="update regal_theory_list set theory='$theory' where subtopicid='$subtopicid' ";
    $res = mysqli_query($con,$query);
    echo $subtopicid;
   
}

if(isset($_POST['deletetheory']))
{
    $theory= $_POST['deletetheory'];
    $subtopicid= $_POST['deletesubtopicid'];
    $query="update regal_theory_list set theory='$theory' where subtopicid='$subtopicid' ";
    $res = mysqli_query($con,$query);
    echo $subtopicid;
}


if(isset($_POST['topic']))
{   
    $topic= $_POST['topic'];
    
$query="SELECT id,sub_topic from regal_topics where topic='$topic' ";

$res=mysqli_query($con,$query);

if(mysqli_num_rows($res)>0)
{
   
    while($row=mysqli_fetch_array($res))
    {
        //$theory_id=$row['id'];
        echo '<option value="'.$row['id'].'">'.$row["sub_topic"].'</option>';
    }
    
}


}



if(isset($_POST['addtheory']))
{
$theory= $_POST['theory'];
$subtopicid= $_POST['sub-topic'];

$query="INSERT INTO `regal_theory_list`(`subtopicid`, `theory`) VALUES ('$subtopicid','$theory') ";

$res=mysqli_query($con,$query);

if($res)
{
    echo 'succesfull';
    header("Location: addtheory.php");
}
else
{
    echo 'error';
}

}

?>
</body>
</html>