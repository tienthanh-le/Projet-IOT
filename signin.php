<?php
    include_once 'header.php';
?>
  <title>SIGN IN</title>
  <link rel="stylesheet" href="cssFiles/sign.css"/> 
</head>


<body>
    <section  class="contact">
        <form action="includes/signin_inc.php" method="post">
        
        <label for="userName" class="label">User</label>
        <br>
        <input name="userName" type="text" class="input" data-type="username" placeholder="Email..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,14}$">
        <br><br>
        <label for="userPwd" class="label">Password</label>
        <br>
	      <input name="userPwd" type="password" class="input" data-type="password" placeholder="Password...">      
        <br><br>
        <label for="check"><span class="icon"></span> Keep me Signed in</label>
        <input id="check" type="checkbox" class="check" checked>
        <br><br>
        <button type="submit" class="button" name="submit">Sign In</button>
		</form>

		<!-- PHP code for handling forced redirected urls from sign up -->
		<?php  
		if (isset($_GET["error"])) {
			if($_GET["error"] == "emptyinput") {
      echo '<script>alert("Please fill in all fields")</script>';
			}
		} 
		if (isset($_GET["error"])) {
			if($_GET["error"] == "wronglogin") {
      echo '<script>alert("Wrong Username/Password")</script>';
			}
		} 
		?>

	</section>
  </body>

</html>