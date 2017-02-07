<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "Sistema";


//Creamos la conexion con base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>