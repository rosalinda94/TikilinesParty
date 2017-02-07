<!DOCTYPE html>
<html>
<head>
	<title>Guardar Usuario</title>
</head>
<div id="outer" style="width:100%">  
<center>
<h1>
<?php
include "header.php";

//CONEXION PARA REGISTRAR USUARIOS POR USUARIOS
$nombreCliente = $_POST["nombre"]; 
$apellidoCliente = $_POST["apellido"];  
$hola = $_POST["clave"];  
$correo = $_POST["correo"];  
$direccion = $_POST["direccion"];  
$telefonoUno = $_POST["telefono"];  
$telefonoDos = $_POST["telefono2"];  
$cedula = $_POST["cedula"];  
$registro=date("Y-m-d");


include "conexionaudi.php";

//Consulta
$sql = "INSERT INTO cliente (cedula, nombreCliente, password, apellidoCliente, direccion, telefonoUno, telefonoDos, correo, registro)
VALUES ('$cedula','$nombreCliente','$hola','$apellidoCliente','$direccion','$telefonoUno','$telefonoDos' ,'$correo', '$registro')";

if ($conn->query($sql) === TRUE) {
    echo "Registrado Correctamente ";
   
} else {
    echo "Cedula ya registrada  Por favor Ingresar Datos Validos" ;
}

$operacion = registroCliente;
$usuario = usuario;
$fecha=date("Y-m-d");
$hora=date("h:i:s");

$auditoria= "INSERT INTO auditory (usuario,fecha ,hora, operacion ) VALUES('$usuario','$fecha','$hora','$operacion')"; 
if ($conn->query($auditoria) === TRUE) {
    echo "";
   
} else {
    echo " " ;
}
$conn->close();
?> 
</h1>
</center>
</div>

</body>
</html>
<meta http-equiv="refresh" content="2; url=index.php" />
