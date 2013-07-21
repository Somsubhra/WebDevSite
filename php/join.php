<?php
	require_once('config.php');
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link){
		die("Failed to connect to server: " . mysql_error());
	}

	$db = mysql_select_db(DB_DATABASE);

	if(!$db){
		die("Unable to connect to database");
	}

	function clean($str){
		$str = @trim($str);

		if(get_magic_quotes_gpc()){
			$str = stripcslashes($str);
		}
		return mysql_real_escape_string($str);
	}

	$name = clean($_POST['name']);
	$email = clean($_POST['email']);
	$daid = clean($_POST['daiictid']);

	if($name||$email||$daid){
		$query = "INSERT INTO joiner(name, daid, email) values('$name','$daid','$email')";
		$result = mysql_query($query);

		if($result){
			header("location: ../index.php");
		}
	}else{
		header("location: ../index.php");
	}
?>