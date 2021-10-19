
<?php
	session_start();
	include('config.php');
	$Email_ID=$_POST['Email_ID']; 
	$Password=$_POST['Password']; 
	$sql="SELECT * FROM regal_cand_registration WHERE Email_ID='$Email_ID' and Password='$Password'";
	$result=mysqli_query($con, $sql);
	$row=mysqli_fetch_array($result);
	if($row)
		{
			$_SESSION['cand_id']=$row['cand_id'];
			$_SESSION['cand_name']=$row['cand_name'];
			$_SESSION['Email_ID']=$row['Email_ID'];
			header("location:User/Userdashboard.php");
		}
	else 
	{
		header("location:index.php");
	}
?>


