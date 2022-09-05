<?php
	
	session_start();
	//Unset variables of session
	session_unset();
	
	session_destroy();
	header('Location: login.php');
	exit();
?>