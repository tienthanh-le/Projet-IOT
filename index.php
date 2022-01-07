<?php
    include_once 'header.php';
?>
  <title>CANVAS</title>
  <link rel="stylesheet" href="cssFiles/fp.css"/> 
</head>
  <body>

      <h1>Keep your art safe</h1>
      <h2>by Canvas</h2>
      <?php
          if(isset($_SESSION["userName"])) {
              echo "<p>Welcome ".$_SESSION["userName"]."</p>";
          }
      ?>
      <h3>OUR EXPERTISE</h3>
        <!-- <p>
         
      </p> -->
      <h4> We offer suitable and tailor-made protection for your art. <br>
          Museum from around the world are already trusting us to keep their patrymony safe.</h4>


      <div class="box1">
        <img class="img1" src="./Data/joconde.png">
        <p class="text1" >La Joconde<br><br> The Louvre museum is already trusting us to keep safe the famous La Joconde into their museum.
      </div>

      <div class="box2">
        <img class="img2" src="./Data/olmeque.png">
        <p class="text2" >Statue<br><br>Every type of art can be protect by Canvas. Just specify to what temperature they should be.
      </div>

      <div class="box3">
        <img class="img3" src="./Data/jeune.jpg">
        <p class="text3" >Girl with a pearl earring<br> <br>The Mauritshuis museum is trusting us to keep this painting into their museum.
      </div>
    </body>

</html>