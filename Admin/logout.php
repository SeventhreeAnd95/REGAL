<?php
	session_start();

	if(isset($_SESSION["Email_ID"]))
	{
		unset($_SESSION["Email_ID"]);	
	}
	
	if(isset($_SESSION["Name"]))
	{
		unset($_SESSION["Name"]);	
	}

    
	if(isset($_SESSION["Sl.no"]))
	{
		unset($_SESSION["Sl.no"]);	
	}
	
	session_destroy();

	header("Location: index.php");
	exit;
?>