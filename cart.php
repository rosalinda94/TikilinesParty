<?php

/*
CARRITO DE PRODUCTO
* Este archio muestra los productos en una tabla.
*/
session_start();
include "conection.php";
include "header.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Reserva</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body background="2.jpeg">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Reserva</h1>
			<br><br>
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("select * from producto");
if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])):
?>
<table class="table table-bordered">
<thead>
	<th>Cantidad</th>
	<th>Producto</th>
	<th>Precio Unitario</th>
	<th>Total</th>
	<th></th>
</thead>
<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
foreach($_SESSION["cart"] as $c):
$products = $con->query("select * from producto where codigoProducto=$c[codigoProducto]");
$r = $products->fetch_object();
	?>
<tr>
<th><?php echo $c["cantidad"];?></th>
	<td><?php echo $r->nombreProducto;?></td>
	<td>Bs <?php echo $r->precioProducto; ?></td>
	<td>Bs <?php echo $c["cantidad"]*$r->precioProducto; ?></td>

	<td style="width:260px;">
	<?php
	$found = false;
	foreach ($_SESSION["cart"] as $c) { if($c["codigoProducto"]==$r->id){ $found=true; break; }}
	?>
		<a href="delfromcart.php?id=<?php echo $c["codigoProducto"];?>" class="btn btn-danger">Eliminar</a>
	</td>
</tr>
<?php endforeach; ?>
</table>

<form class="form-horizontal" method="post" action="process.php">

<form name="fcalen"> 
Fecha: 
   	<INPUT name="fecha1" size="10"> 
   	<input type=button value="Seleccionar fecha" onclick="muestraCalendario('','fcalen','fecha1')"> 
</form>
  <div class="form-group">

		Ingresar fecha del evento (00/00/2017)
		<br><input type="text" name="evento" placeholder="Fecha de evento" /><br />
		<br />
		Ingresar fecha de envio de productos (00/00/2017)
		<br><input type="text" name="envio" placeholder="Fecha de envio" /><br />
		<br />

  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Procesar Reserva</button>
    </div>
  </div>
</form>


<?php else:?>
	<p class="alert alert-warning">El carrito esta vacio.</p>
<?php endif;?>
<br><br><hr>
		<center><a href="products.php" class="btn btn-default">Productos</a></center>	

		</div>
	</div>
</div>
</body>
</html>