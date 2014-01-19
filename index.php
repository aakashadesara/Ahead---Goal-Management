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
                 
                 
                 ?>

        </div>        

        <div class = "form1">

		<form method="post" action="login.php">
                <input type="text" name="username" class = "username" placeholder = "Username"> <br>
                <input type="text" name="pwd" class = "password" placeholder = "Password"> <br>
     
                
                <input type="submit" class = "sign_in" value="Sign in"/>
        </form>                 
        
        </div>
            

        <div class="rightForm">
        
        <form method="post" action="register.php">

                <input type="text" name="fname" class = "username1" placeholder = "Username"> <br>
                <input type="text" name="fname" class = "email" placeholder = "Email"> <br>
                <input type="text" name="fname" class = "phone" placeholder = "Phone Number"> <br>
                <input type="text" name="fname" class = "courier" placeholder = "Carrier"> <br>
                <input type="text" name="fname" class = "password1" placeholder = "Password"> <br>
                <input type="text" name="fname" class = "password1" placeholder = "Password"> <br>
                
                <input type="submit" class = "sign_in" value="Register"/>
                
        </form>

        </div>        

        

<script>

        $(function () {
                $(".fade-in").removeClass("fade-in");
        })

</script>


</body>


</html>