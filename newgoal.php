<?php

$username = $_POST['username'];
$name = $_POST['name'];
$description = $_POST['description'];
$month = (int)$_POST['month'];
$day = (int)$_POST['day'];
$year = (int)$_POST['year'];
$frequency = $_POST['frequency'];
$freqUnit = $_POST['freqUnit'];

$date = mktime(0,0,0,$month,$day,$year);
//echo $day;
$dateForDB = date('Y-m-d H:i:s',$date);

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



	$query = "INSERT INTO goals values('$username','$name','$description','$dateForDB','$frequency','$freqUnit','inprogress')";

	$result = $dbhandle->query($query);
	
	/*
	echo "name: ".$name."<br>";
	echo "description: ".$description."<br>";
	echo "month: ".$month."<br>";
	echo "day: ".$day."<br>";
	echo "year: ".$year."<br>";
	echo "freq: ".$frequency."<br>";
	
	
	echo "success";
	
	*/
	
	echo '<meta HTTP-EQUIV="REFRESH" content="0; url=main.php?id='.$username.'&success">';


?>