<?php
session_start();

	echo "<html><body>";

	$username = $_POST['username'];
	$pwd1 = $_POST['pwd1'];
	$pwd2 = $_POST['pwd2'];
	$carrier = $_POST['carrier'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	if(empty($username) || empty($pwd1) || empty($pwd2) || empty($carrier) || empty($email)) {
		echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index.php?empty">';	
	}
	else if($pwd1!=$pwd2) {
		echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index.php?pwd">';
	}
	else {
	
	
		if($carrier=="tmobile") {
			$carrier = "tmomail.net";
		}
		else if($carrier=="att") {
			$carrier = "txt.att.net";
		}
		else if($carrier=="sprint") {
			$carrier = "messaging.sprintpcs.com";
		}
	
		$txtaddress = "".$phone."@".$carrier;
	

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

		$query = "INSERT INTO users VALUES('$username','$pwd1','$email','$phone','$carrier','$txtaddress')";

		$result = $dbhandle->query($query);
	
		echo '<meta HTTP-EQUIV="REFRESH" content="0; url=main.php?id='.$username.'">';

	}	
	
?>


</body>

</html>

