<?php
session_start();

	echo "<html><body>";

	$username = $_POST['username'];
	$pwd = $_POST['pwd'];

	
	

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

	$query = "SELECT * FROM users where username='$username'";

	$result = $dbhandle->query($query);
	
	//echo $username."<br>";
	//echo $pwd."<br>";
	
	if(mysqli_num_rows($result)==0)
	{
		//echo "no such user<br>";
		echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index.php?nouser">';
	}
	else {
		
		while ($row = $result->fetch_array()) {
		   if($row{'password'}==$pwd) {
		   		//echo "good password<br>";
		   		
		   		$_SESSION['username'] = $username;
		   		
		   		echo '<meta HTTP-EQUIV="REFRESH" content="0; url=main.php?id='.$username.'">';
		   }
		   else {
		   		//echo "wrong password<br>";
		   		echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index.php?wrongpwd">';
		   }
		}
		
	}
	
	


	


?>


</body>

</html>

