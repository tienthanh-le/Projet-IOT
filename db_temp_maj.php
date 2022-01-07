<?php

// require_once "./includes/db_handler.php";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

// Connect to users table
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con)
{
	die("failed to connect to users table!".mysqli_connect_error());
}   


function read_words_customed($ip, $port, $register, $adr)
  {
      require_once ('./Phpmodbus/ModbusMaster.php');
      $modBus = new ModbusMaster($ip, "TCP", $port);
      $recData = $modBus->readMultipleRegisters(1, $adr, $register);
      $val16bits = $recData[0] * 256 + $recData[1];
      return $val16bits;
  }

#Creation de la table
$sql = "CREATE TABLE IF NOT EXISTS Temp_Value ( ID_Value int NOT NULL, val FLOAT)";
if ($con->query($sql) == FALSE) {
  echo "Error creating database: " . $con->error;
}

#Lecture valeur 
$val = read_words_customed("192.168.52.232", 502, 1, 16)/10; 

$sql = "INSERT INTO Temp_Value (val) VALUES ($val)";
if ($con->query($sql) === FALSE) {
  echo "error inserting value " . $con->error;
}
$con->close();

?>