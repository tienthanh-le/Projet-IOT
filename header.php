<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head> 
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="cssFiles/foot.css"/> -->
    <div class="header">
      <a href="index.php" class="logo">Canvas</a>
      <div class="header-right">  
        <!-- Check if user loged in -->
        <?php
          if(isset($_SESSION["userName"])){
         
            echo "<a class = 'mainButton' a href = 'histogramme.php'>Your Data</a>";
            echo "<a class = 'ClassicButton' a href = 'team.php'>About us</a>";
            echo "<a class = 'ClassicButton' a href = 'contact.php'>Contact</a>";
            echo "<a class = 'ClassicButton' a href = 'includes/logout_inc.php'>Log Out</a>";
          }
          else {
            echo "<a class = 'mainButton' href = 'signin.php'>Sign in</a>";
            echo "<a class = 'ClassicButton' href = 'signup.php'>Sign up</a>";
            echo "<a class = 'ClassicButton' href = 'team.php'>About us</a>";
            echo "<a class = 'ClassicButton' href = 'contact.php'>Contact</a>";
          }
        ?>
      </div>
    </div>
