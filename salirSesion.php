<?php
//se inicia la sesion para poder acceder a sus valores
session_start();
//se destruye la sesion actual
session_destroy();
//me redirecciono a index
header("location:inicio.php");
include "conexionaudi.php";

//Consulta
$operacion = CerroSesion;
$usuario = administrador;
$fecha=date("Y-m-d");
$hora=date("h:i:s");

$auditoria= "INSERT INTO auditory (usuario,fecha ,hora, operacion ) VALUES('$usuario','$fecha','$hora','$operacion')"; 
if ($conn->query($auditoria) === TRUE) {
    echo "";
   
} else {
    echo "" ;
}
$conn->close();

?>