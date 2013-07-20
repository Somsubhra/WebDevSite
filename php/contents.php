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

	$query = "SELECT content FROM contents WHERE type='about'";
	$result = mysql_query($query);
	$about_content = mysql_fetch_assoc($result);

	$query = "SELECT content FROM contents WHERE type='tagline'";
	$result = mysql_query($query);
	$tag_content = mysql_fetch_assoc($result);

	$query = "SELECT * FROM event";
	$event_content = mysql_query($query);

	$query = "SELECT * FROM member";
	$member_content = mysql_query($query);

	$project = "SELECT * FROM project";
	$project_content = mysql_query($query);
?>