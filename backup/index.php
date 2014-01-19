<html>

<head>
        <title>Ahead</title>

        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
</head>

<body>

        <div class = "headerMid">
                 <img class="logo" src="img/logo.png" height="600px"><br>
                 <h1 style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,.8);">Make goals. Complete them. Get <i>Ahead</i>.</h1><br>
                 
                 <?php
                 
                 if(isset($_GET{'nouser'})) {
                 	echo "<h2 style='color:red; text-shadow: 0 0 15px rgba(250,250,250,.8);'>Uh-Oh, couldn't find a user with that username</h2>";
                 }
                 else if(isset($_GET{'wrongpwd'})) {
                 	echo "<h2 style='color:red; text-shadow: 0 0 15px rgba(250,250,250,.8);'>Uh-Oh, that's the wrong password! Try again.</h2>";
                 }
                 else if(isset($_GET{'empty'})) {
                 	echo "<h2 style='color:red; text-shadow: 0 0 15px rgba(250,250,250,.8);'>Uh-Oh, Please fill out all required fields! Try again.</h2>";
                 }
                 else if(isset($_GET{'pwd'})) {
                 	echo "<h2 style='color:red; text-shadow: 0 0 15px rgba(250,250,250,.8);'>Uh-Oh, passwords did not match! Try again.</h2>";
                 }
                 
                 
                 
                 ?>

        </div>        

        <div class = "form1">

		<form method="post" action="login.php">
                <input type="text" name="username" class = "username" placeholder = "Username"> <br>
                <input type="password" name="pwd" class = "password" placeholder = "Password"> <br>
     
                
                <input type="submit" class = "sign_in" value="Sign in"/>
        </form>                 
        
        </div>
            

        <div class="rightForm">
        
        <form method="post" action="register.php" class="post">

                <input type="text" name="username" class = "username1" placeholder = "Username" required> <br>
                <input type="email" name="email" class = "email" placeholder = "Email" required> <br>
                <input type="text" name="phone" class = "phone" placeholder = "Phone Number"> <br>
                <div id="carrier_container">
                <div id='cssmenu'>
                <ul>
                   <li class='active'><input type="radio" name="carrier" value="t-mobile" checked><span><br>TMobile</span></input></li>
                </ul>
            	</div>
            	<div id='cssmenu'>
              	  <ul>
                	   <li class='active'><input type="radio" name="carrier" value="att"><span><br>AT&T</span></input></li>
                	</ul>
            	</div>
            	<div id='cssmenu'>
                	<ul>
                	   <li class='active'><input type="radio" name="carrier" value="sprint"><span><br>Sprint</span></input></li>
               	 </ul>
            	</div>
            	</div>
            	
            	
                <input type="password" name="pwd1" class = "password1" placeholder = "Password" required> <br>
				<input type="password" name="pwd2" class = "password1" placeholder = "Password (Repeat)" required> <br>
                <input type="submit" class = "register_button" value="Register"/>
                
        </form>

        </div>        

        

<script>

        $(function () {
                $(".fade-in").removeClass("fade-in");
        })

</script>



</body>


</html>