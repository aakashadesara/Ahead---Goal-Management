<?php


$id = $_GET['id'];

$dbusername = "darapper_ahead";
	$password = "aacodeday2014";
	$hostname = "localhost"; 

	// Connect to the database
	$dbhandle = new mysqli($hostname, $dbusername, $password, "darapper_ahead") 
	 or die("Unable to connect to MySQL");

	// Select a database to work with
	$selected = $dbhandle->select_db("darapper_ahead")
	 or die("Could not select examples");

	$query = "SELECT * FROM goals where id='$id'";

	$result = $dbhandle->query($query);
	
	//echo $username."<br>";
	//echo $pwd."<br>";
	
	
		
	while ($row = $result->fetch_array()) {
	   
	   $name = $row{'name'};
	   $description = $row{'description'};
	   $freq = $row{'frequency'};
	   $unit = $row{'freqUnit'};
	   
	   
	   echo "<h1>$name</h1>";
	   echo "<h2>Reminders every $frequency $unit</h2>";
	   echo "<p style='font-size: 20px;'>$description</p>";
	   echo "<a style='float: left;' href='complete.php?id=$id'>Complete</a><a style='float: right;' href='complete.php?id=$id&delete'>Delete</a>";
	   
	}
		
	







?>