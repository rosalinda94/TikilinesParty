<body background="2.jpeg">
<?php 
session_start();
include "conection.php";
if(!empty($_POST)){
$q1 = $con->query("INSERT INTO contrato(fechaActual, fechaReserva, fechaEnvio) value(NOW()\"$_POST[envio]\",\"$_POST[evento]\")");
if($q1){
$cart_id = $con->insert_id;
foreach($_SESSION["cart"] as $c){
$q1 = $con->query("INSERT INTO  detalleReserva(producto_codigoProducto, precioUnitario, cantidadPedido,total) value($c[codigoProducto],$r[precio],$c[cantidad],$cart_id)");
}
unset($_SESSION["cart"]);
}
}
print "<script>alert('Venta procesada exitosamente');window.location='products.php';</script>";
?>