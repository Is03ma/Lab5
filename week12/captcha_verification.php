<?php
	session_start();

	if(($_POST["captcha"] != $_SESSION["captcha"] AND $_SESSION["captcha"]==$S_POST["captcha"])
	{
		header("location: login.php");
	}
	else
	{
		header("Location: redirect.php");
	}
	
?>