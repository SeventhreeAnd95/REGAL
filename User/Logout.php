<?php
	session_start();
	if(isset($_SESSION["can_id"]))
	{
		unset($_SESSION["can_id"]);	
	}
	if(isset($_SESSION["email"]))
	{
		unset($_SESSION["email"]);	
	}
	
	
	
	session_destroy();

	header("Location: ../index.php");
	exit;
?>