<?php
$servername = "localhost";
$username = "root";
$password = "fonseca1";
$dbname = "litos";
//Create connection
$conn =  mysqli_connect($servername,$username,$password,$dbname);
//Check connection
if(mysqli_connect_errno($conn)){
echo "Fallo de conexión a la base de datos: ".
mysqli_connect_error();
}

 ?>
