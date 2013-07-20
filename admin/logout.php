<?php
	session_start();

	if(!isset($_SESSION['adminid'])){
		header("location: access_denied.php");
		exit();
	}

	unset($_SESSION['adminid']);
	header("location:../index.php");	
?>