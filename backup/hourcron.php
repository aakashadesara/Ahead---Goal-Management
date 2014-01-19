<?php



	$dbusername = "darapper_ahead";
	$password = "aacodeday2014";
	$hostname = "localhost"; 

	// Connect to the database
	$dbhandle = new mysqli($hostname, $dbusername, $password, "darapper_ahead") 
	 or die("Unable to connect to MySQL");

	// Select a database to work with
	$selected = $dbhandle->select_db("darapper_ahead")
	 or die("Could not select examples");

	$usersquery = "SELECT username FROM users where username='ayushm'";

	$usersResult = $dbhandle->query($usersquery);
	
	while($user = $usersResult->fetch_array()) {
		
		$query = "SELECT * FROM goals WHERE username='".$user{'username'}."' AND freqUnit='hours'";
		$result = $dbhandle->query($query);
		
		$email = $user{'email'};
		$txtAddress = $user{'txtAddress'};
		$username= $user{'username'};
		
		$reminderList = array();
		
		
		while($row = $result->fetch_array()) {
			if($row{'countdown'}>1) {
				$decreaseQuery = "UPDATE goals SET countdown = countdown-1 WHERE id='".$row{'id'}."'";
				$dbhandle->query($decreaseQuery);
			}
			else if($row{'countdown'}==1) {
				$reminderList[] = $row{'name'};
				$resetCountdownQuery = "UPDATE goals SET countdown='".$row{'frequency'}."' WHERE id='".$row{'id'}."'";
				$dbhandle->query($resetCountdownQuery);
			}
		}
		
		
		if(!empty($reminderList)) {
			
			echo "reached send email section";
			
			$reminders = "<br>";
			for($i=0; $i<count($reminderList);$i++) {
				echo "<b>--".$reminderList[$i]."</b><br>";
				$reminders .= "<br>".$reminderList[$i];
			}
			$reminders .= "<br><br>";
			
			
			$message = "
			<html>
			<body>
			<p>
			Howdy $username! <br><br> 
			You should continue working toward the following goals: $reminders Visit your dashboard <a href='ahead.ayushmehra.com/main.php?id=$username'>by clicking here</a>. 
		
			</p>
			<center>
			<b>~The Ahead Team<br><br></b> <br><br>
			<img border='0' src='http://ahead.ayushmehra.com/img/logo.png' width='300px'/>
			</center>
			</body>
			</html>
			";
			
			$headers = "From: Ahead@ahead.com" . "\r\n";
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			
			//$to = $row{'email'};
			$to = "ayush.mehra@gmail.com";
			//$to = $email;
			$subject = "Your Goals Reminder";
	
			mail($to,$subject,$message,$headers);
			
			
			
			$txtMessage = "Continue working on these goals: ";
			for($i=0; $i<count($reminderList);$i++) {
				$txtMessage .= $goal.", ";
			}
			
			//mail($txtAddress, "", $txtMessage, "From: Ahead");
			
			mail("4087592950@txt.att.net", "", $txtMessage, "From: team@ahead.com");
			
		}
		
	}
	
		

























?>