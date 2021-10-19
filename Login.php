

<?php
	session_start();
	include 'config.php';
	$uemail=$_POST['cand_email']; 
	$upassword=$_POST['cand_password']; 
	$sql="SELECT * FROM regal_cand_registration WHERE cand_email='$uemail' and cand_password='$upassword'";
	$result=mysqli_query($con, $sql);
	$row=mysqli_fetch_array($result);
	if($row)
	{
			$_SESSION['cand_id']=$row['cand_id'];
			$_SESSION['cand_email']=$row['cand_email'];
			$_SESSION['cand_name']=$row['cand_name'];
			header("location:index.php");
	}
	else 
	{
		header("location:Signup.php");
	}
?>

