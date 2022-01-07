<?php
include_once 'header.php';
?> 
  <title>CANVAS CONTACT</title>
  <link rel="stylesheet" href="cssFiles/contact.css"/> 
</head>

  <body>
      <form class="contact" action="includes/contact_inc.php" method="post">
        <label for="username" class="icon-user" > Name</label><br>
        <input placeholder="Your name.." data-type="input" name = "username">
        <br><br>
        <label for="usermail" class="icon-envelope" > E-mail</label><br>
        <input placeholder="Your email.." data-type="input" class="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,14}$" name = "useremail">
        <br><br>
        <label for="message" class="icon-comment" > Message</label><br>
        <input placeholder="Your message.." data-type="message" name = "message">
        <br><br>
        <button type="submit" class="button" name="submit">SEND !</button>
      </form>

  </body>

</html>