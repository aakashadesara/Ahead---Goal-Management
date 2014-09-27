<?php

// Database login info. Make sure to use a php compatible server!
	$dbusername = "darapper_ahead";
	$password = "aacodeday2014";
	$hostname = "localhost"; 

	// Connect to the database
	$dbhandle = new mysqli($hostname, $dbusername, $password, "darapper_ahead") 
	 or die("Unable to connect to MySQL");

	// Select a database to work with
	$selected = $dbhandle->select_db("darapper_ahead")
	 or die("Could not select examples");



	$query = "INSERT INTO goals values('$name','$description','$dateForDB','$frequency')";

	$result = $dbhandle->query($query);




?>
