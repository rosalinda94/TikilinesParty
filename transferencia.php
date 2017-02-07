<!DOCTYPE html>
<html>
<head>
    <title>Transferencia</title>

</head>
<body background="5.jpeg">
<div id="outer" style="width:100%">  
<center>
<h1>
<center>
<?php
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
$cantidaddia = $_POST["cantidaddia"];  
$fecha=date("Y-m-d");
$pago= "transferencia";

echo "$ced";

$fecha=date("y-m-d");
include "conexionaudi.php";

//Consulta
$sql = "INSERT INTO contrato (cliente_cedula, pago, fecha, fechaEnvio, fechaReserva,  direccionEnvio, products, cantidaddia)
VALUES ('$cliente_cedula', '$pago', '$fecha','$fechaEnvio','$fechaReserva','$direccionEnvio', '$products','$cantidaddia')";

if ($conn->query($sql) === TRUE) {
    echo "<br></br>";
//   echo '<center><button class="btn btn-danger" type="button" value="Aceptar" onClick="javascript:window.location.href=\'pago.php\'">Ir</button><center>';  


} else {
   }

$referencia = $_POST["referencia"]; 
$monto = $_POST["monto"]; 
$banco = $_POST["banco"];  
$usuario = $_POST["cliente_cedula"];  
$fecha=date("Y-m-d");

include "conexionaudi.php";

//Consulta
$sql = "INSERT INTO transferencia (cedulaCliente, monto , banco, referencia, fecha)
VALUES ('$usuario','$monto','$banco','$referencia', '$fecha')";

if ($conn->query($sql) === TRUE) {
    echo "<br><br><br><center>GRACIAS POR SU COMPRA LO ESTAREMOS LLAMANDO PARA CONFIRMAR</center>";
} else {
    echo "Error " ;
}


$operacion = registroContratoTransferencia;
$usuario = $_POST["cedulita"];  
$fecha=date("Y-m-d");
$hora=date("h:i:s");

$auditoria= "INSERT INTO auditory (usuario,fecha ,hora, operacion ) VALUES('$usuario','$fecha','$hora','$operacion')"; 
if ($conn->query($auditoria) === TRUE) {
    echo "";
   
} else {
    echo "" ;
}

/*
include "conexionaudi.php";

//Consulta
$operacion = pagoTransferencia;
$fecha=date("Y-m-d");
$hora=date("h:i:s");

$auditoria= "INSERT INTO auditory (usuario,fecha ,hora, operacion ) VALUES('$usuario','$fecha','$hora','$operacion')"; 
if ($conn->query($auditoria) === TRUE) {
    echo "";
   
} else {
    echo "" ;
}
*/

 $conn->close();
?> 
         <center>  <img src="descarga.jpg" alt="" height="200" width="200"> </center> 


    </form>
    </center>
    </h1>
    </center>
    </div>
    </body>
    </html>      <meta http-equiv="refresh" content="2; url=index.php" />
