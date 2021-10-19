<?php
	session_start();
	include('../config.php');
	$Email_ID=$_POST['Email_ID']; 
	$Password=$_POST['Password']; 
    $Mobile_no=$_Post['Mobile_no'];
	$sql="SELECT * FROM regal_sadmin WHERE Email_ID='$Email_ID' and Password='$Password'";
	echo $sql;
	$result=mysqli_query($con, $sql);
	$row=mysqli_fetch_array($result);
	if($row)
		{
			$_SESSION['Sl.no']=$row['Sl.no'];
			$_SESSION['Name']=$row['Name'];
			$_SESSION['Email_ID']=$row['Email_ID'];
			$_SESSION['Mobile_no']=$row['Mobile_no'];
			header("location:saindex.php");
		}
	else 
	{
		header("location:../index.php");
	}
?>


