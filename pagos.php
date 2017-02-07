<!DOCTYPE html>
<html>
<head>
    <title>Deposito</title>

</head>
<body background="5.jpeg">
<div id="outer" style="width:100%">  
<center>
<h1>
<?php
//CONTRATOO
session_start();
//Asignamos todos los valores guardados en la sesion a la variable $carro, como hicimos en las paginas anteriores
$carro = $_SESSION['carro'];
//$products es la variable que usaremos para mostrar los productos en esta pagina (separados por '+')
$products = '';
//$products2 es la que usaremos para enviar a Paypal (separados por ',')
$products2 = '';
foreach ($carro as $k => $v) {
    $unidad = $v['cantidad'] > 1 ? " unidades de " : " unidad de ";
    $products.=$v['cantidad'] . $unidad . $v['nombreProducto'] . " . ";
    $products2.=$v['cantidad'] . $unidad . $v['nombreProducto'] . ", ";
}
//eliminamos el ultimo '+':
$products = substr($products, 0, (strlen($products) - 1));
//eliminamos la ultima coma y el espacio que sigue a la misma:
$products2 = substr($products2, 0, (strlen($products2) - 2));
?>
<?php

$direccionEnvio = $_POST["direccion"];  
$fechaEnvio = $_POST["envio"];  
$fechaReserva = $_POST["reserva"];  
$cliente_cedula = $_POST["cliente_cedula"];  
echo "$cliente_cedula";
$pago= "deposito";

$fecha=date("y-m-d");
include "conexionaudi.php";

//Consulta
$sql = "INSERT INTO contrato (cliente_cedula, pago, fecha, fechaEnvio, fechaReserva,  direccionEnvio, products)
VALUES ('$cliente_cedula', '$pago', '$fecha','$fechaEnvio','$fechaReserva','$direccionEnvio', '$products')";

if ($conn->query($sql) === TRUE) {
    echo "<br></br>";
  //  echo '<center><button class="btn btn-danger" type="button" value="Aceptar" onClick="javascript:window.location.href=\'pago.php\'">Ir</button><center>';  


} else {
    echo "<br><br><br><br><br><br><br><br>Usuario no registrado porfavor registrarse";          
         echo '<button class="btn btn-danger" type="button" value="Aceptar" onClick="javascript:window.location.href=\'registrarse.php\'">Aceptar</button>';}

//ESTO ES DE AUDITORIA

$operacion = registroContratoDeposito;
$usuario = $_POST["cliente_cedula"];  
$fecha=date("Y-m-d");
$hora=date("h:i:s");

$auditoria= "INSERT INTO auditory (usuario,fecha ,hora, operacion ) VALUES('$usuario','$fecha','$hora','$operacion')"; 
if ($conn->query($auditoria) === TRUE) {
    echo "";
   
} else {
    echo "" ;
}

//ESTO ES PARA DEPOSITO
$nombre = $_POST["nombre"]; 
$tarjeta = $_POST["tarjeta"]; 
$mes = $_POST["mes"]; 
$ano = $_POST["ano"];  
$codigo = $_POST["codigo"];  
$cliente_cedula = $_POST["cliente_cedula"];  

include "conexionaudi.php";

$sql = "INSERT INTO deposito (nombre, cliente_cedula, tarjeta , mes, ano, codigo)
VALUES ('$nombre','$cliente_cedula','$tarjeta','$mes','$ano','$codigo')";

if ($conn->query($sql) === TRUE) {
    echo "Gracias por su alquiler, lo estaremos llamando para cualquier informacion extra.";
   
} else {
    echo "Error " ;
}

$conn->close();
/*
$operacion = PagoPorDeposito;
$fecha=date("Y-m-d");
$hora=date("h:i:s");

$auditoria= "INSERT INTO auditory (usuario,fecha ,hora, operacion ) VALUES('$usuario','$fecha','$hora','$operacion')"; 
if ($conn->query($auditoria) === TRUE) {
    echo "Auditoria Realizada";
   
} else {
    echo "Auditoria fallo " ;
}*/
?> 
</h1>
</center>
</div>

</body>
</html>
         <center>  <img src="descarga.jpg" alt="" height="200" width="200"> </center> 
<meta http-equiv="refresh" content="2; url=index.php" />
