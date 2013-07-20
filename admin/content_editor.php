<?php
session_start();

	if(!isset($_SESSION['adminid'])){
		header("location: access_denied.php");
		exit();
	}

?>
<head><title>Content Editor</title></head>
<a href="logout.php">Logout</a>

<br/>

<h3>Content Editor</h5>
<form id="contentform" action="contents.php" method="post">
	<h4>Brief description in headline</h4>
	<textarea id="tagcontent" name="tagcontent" rows=10 cols=100></textarea>
	<br/>
	<h4>About</h4>
	<textarea id="aboutcontent" name="aboutcontent" rows=10 cols=100></textarea> 
	<br/>
	<input type="submit" value="Save changes to headline and about contents">
</form>
<br/>

<h3>Event Adder</h3>
<form id="eventform" action="event.php" method="post">
	<h4>Time</h4>
	<input type="time" id="timecontent" name="timecontent"/>
	<br/>
	<h4>Date</h4>
	<input type="date" id="datecontent" name="datecontent"/>
	<br/>
	<h4>Speaker</h4>
	<input type="text" id="speakercontent" name="speakercontent"/>
	<br/>
	<h4>Topic</h4>
	<input type="text" id="topiccontent" name="topiccontent"/>
	<br/>
	<input type="submit" value="Add Event"/> 
	<br>
	Note: To drop event drop it from phpmyadmin using same credentials
</form>

<h3>Member adder</h3>
<form id="memberform" action="member.php" method="post">
	<h4>Member name</h4>
	<input type="text" id="namecontent" name="namecontent"/>
	<br/>
	<h4>Member position</h4>
	<input type="text" id="positioncontent" name="positioncontent"/>
	<br/>
	<input type="submit" value="Add member"/>
	<br/>
	Note: To drop member drop it from phpmyadmin using same credentials
</form>

<h3>Project adder</h3>
<form id="memberform" action="project.php" method="post">
	<h4>Project name</h4>
	<input type="text" id="namecontent" name="namecontent"/>
	<br/>
	<h4>Project description</h4>
	<textarea id="descontent" name="descontent" row=10 cols=100></textarea>
	<br/>
	<input type="submit" value="Add project"/>
	<br/>
	Note: To drop project drop it from phpmyadmin using same credentials
</form>