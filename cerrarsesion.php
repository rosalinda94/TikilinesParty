<?php
session_start();
session_unset();
session_destroy();
//Cerrar sesion de usuario
?>
<html>
<head>
<title>Cerrar Sesion</title>
</head>
<body>

<?php
$_SESSION['usuario']=$_REQUEST['campousuario'];
echo $_SESSION;

include "conexionaudi.php";

//Consulta
$operacion = CerroSesion;
$usuario = Cliente;
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
<meta http-equiv="refresh" content="0; url=index.php" />

</body>
</html>
