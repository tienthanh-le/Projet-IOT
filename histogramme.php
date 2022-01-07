<?php
    include_once 'header.php';
?>

    <title>Histograme</title>
    <link rel="stylesheet" href="cssFiles/graph.css"/>
  </head>
      <body>
        <section class ="">
          <p class="temp">Temperature (°C)</p>
          <p class="s">Time (Since you are connected)</p>
          <a href='includes/graph.php'>
            <img src="./includes/graph.php">
          </a>
          

        <!-- 3 buttons : Refroid + Rechauf + STOP -->
        <form action="includes/vent_res_inc.php" method="post">
          <button type="submit" class="button" name="refroid">Cooling</button>
          
          <button type="submit" class="button" name="rechauf">Warming</button>
          
          <button type="submit" class="button" name="stop">STOP</button>
        </form>
        
        <?php  
          if (isset($_GET["status"])) {
            if($_GET["status"] == "refroid") {
              echo "<script>
              alert('Cooling in process ....');
              window.location.href='./histogramme.php';
              </script>";
            }
          } 
          if (isset($_GET["status"])) {
            if($_GET["status"] == "rechauf") {
              echo "<script>
              alert('Warming in process ....');
              window.location.href='./histogramme.php';
              </script>";
              }
          }
          if (isset($_GET["status"])) {
            if($_GET["status"] == "stop") {
              echo "<script>
              alert('Stop all processess ....');
              window.location.href='./histogramme.php';
              </script>";
              }
          } 
          if (isset($_GET["status"])) {
            if($_GET["status"] == "error") {
              echo "<script>
              alert('Something went wrong ....');
              window.location.href='./histogramme.php';
              </script>";
              }
          }
        ?>
        </section>
      </body>
</html>