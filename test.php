<?php

$username = $_GET['id'];

?>

<html>

<body>

	<form action="newgoal.php" method="post">
	
		<input type="text" name="name"/><br>
		<input type="text" name="description"/><br>
		<input type="text" name="month"/><input type="text" name="day"/><input type="text" name="year"/><br>
		<input type="text" name="frequency"/><br>
		<input type="hidden" name="username" value="<?php echo $username; ?>" />
		<input type="submit" value="submit"/>
	
	</form>


</body>



</html>
