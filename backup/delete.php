<?php

$id = $_GET['id'];
$username = $_GET['usr'];

	// Database login info
	$dbusername = "darapper_ahead";
	$password = "aacodeday2014";
	$hostname = "localhost"; 

	// Connect to the database
	$dbhandle = new mysqli($hostname, $dbusername, $password, "darapper_ahead") 
	 or die("Unable to connect to MySQL");

	// Select a database to work with
	$selected = $dbhandle->select_db("darapper_ahead")
	 or die("Could not select examples");

	$query = "DELETE FROM goals WHERE id=$id";

	$result = $dbhandle->query($query);
	
	
	echo '<meta HTTP-EQUIV="REFRESH" content="0; url=main.php?id='.$username.'">';



?>