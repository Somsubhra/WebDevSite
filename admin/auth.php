<?php
	$adminid = $_POST['adminid'];
	$adminpassword = $_POST['adminpassword'];
	require_once('config.php');

	if($adminid == DB_USER && $adminpassword == DB_PASSWORD){
		session_start();
		$_SESSION['adminid'] = $adminid;
		session_write_close();
		header("location: content_editor.php");
	}
	else{
		echo("Wrong credentials");
	}
?>