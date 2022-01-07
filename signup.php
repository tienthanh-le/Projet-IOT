<?php
    include_once 'header.php';
?>
  <title>SIGN UP</title>
  <link rel="stylesheet" href="cssFiles/sign.css"/> 
</head>

<body>
  <section class ="contact">
    <form action="includes/signup_inc.php" method="post">

    <label for="userName" class="label">Username</label><br>
    <input name="userName" type="text" class="input" data-type="username" placeholder="Username...">
    <br><br>
    <label for="userPwd" class="label">Password</label><br>
    <input name="userPwd" type="password" class="input" data-type="password" placeholder="Password...">

    <br><br>
    <label for="repeatPwd" class="label">Repeat Password</label><br>
    <input name="repeatPwd" type="password" class="input" data-type="password" placeholder="Repeat Password...">
    <br><br>
    <label for="userEmail" class="label">Email Address</label><br>
    <input name="userEmail" type="text" class="input" placeholder="Email Address..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,14}$">

    <br><br>
    <button type="submit" class="button" name="submit" >Sign up</button>
    <br><br>
    <a label for="tab-1" href = 'signin.php'>Already Member?</a>

    </form>
    
    <!-- PHP code for handling forced redirected urls from sign up -->
    <?php  
    if (isset($_GET["error"])) {
      if($_GET["error"] == "emptyinput") {
        echo '<script>alert("Please fill in all fields")</script>';
      }
    } 
    if (isset($_GET["error"])) {
      if($_GET["error"] == "takenusername") {
        echo '<script>alert("Please chose another username")</script>';
      }
    } 
    if (isset($_GET["error"])) {
      if($_GET["error"] == "invaliduserpwd") {
        echo '<script>alert("Repeat Password does not match")</script>';

      }
    }
    if (isset($_GET["error"])) {
      if($_GET["error"] == "invaliduseremail") {
        echo '<script>alert("Please enter a valid email")</script>';

      }
    }
    if (isset($_GET["error"])) {
      if($_GET["error"] == "takenusername") {
        echo '<script>alert("Username already taken ! Please choose another username or log in with your email")</script>';
      }
    }
    if (isset($_GET["error"])) {
      if($_GET["error"] == "stmtfailed") {
        echo '<script>alert("Oppsie! Something went wrong")</script>';
      }
    }
    if (isset($_GET["error"])) {
      if($_GET["error"] == "none") {
        echo "<script>
        alert('You have signed up successfully !');
        window.location.href='./signin.php';
        </script>";
      }
    }
    ?>

  </section>  
  </body>

</html>