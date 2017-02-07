<!DOCTYPE html>
<html>
<head>
	<title>Guardar Usuario</title>

</head>
<body background="5.jpeg">
<div id="outer" style="width:100%">  
<center>
<h1>
<?php
//CONEXION PARA REGISTRAR Administrador POR Administrador
$cedula = $_POST["cedula"]; 
$usuario = $_POST["nombre"]; 
$hola = $_POST["clave"];  
$fecha=date("Y-m-d");
include "conexionaudi.php";

//Consulta
$sql = "INSERT INTO usuario (cedula, usuario, password, fecha)
VALUES ('$cedula','$usuario','$hola','$fecha')";

if ($conn->query($sql) === TRUE) {
    echo "Registrado Correctamente";
   
} else {
    echo "Cedula Ya Registrado " ;
}

$auditoria= Admin;
$operacion = registroAdministrador;
$fecha=date("Y-m-d");
$hora=date("h:i:s");

$auditoria= "INSERT INTO auditory (usuario,fecha ,hora, operacion ) VALUES('$auditoria','$fecha','$hora','$operacion')"; 
if ($conn->query($auditoria) === TRUE) {
    echo "";
   
} else {
    echo "" ;
}

$conn->close();
?> 
</h1>
<meta http-equiv="refresh" content="2; url=registroadusu.php" />
</center>
</div>

</body>
</html>