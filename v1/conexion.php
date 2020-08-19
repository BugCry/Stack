<?php
$servername = "localhost";
$username = "root";
$password = "test";
$BD = "test";
// Create connection
$con = new mysqli($servername, $username, $password);

mysqli_select_db($con,$BD); //recibe como parametros la conexion y el nombre de la base de datos

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  //echo "Connected successfully";

return $con;
?>