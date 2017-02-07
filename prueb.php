<?php
/*
* Este archio muestra los productos en una tabla.
*/
session_start();
include "conection.php";
include "headerusu.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>


  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
    <br></br>
<div class="panel panel-primary">
    <div class="panel-heading text-success text-center" >Detalles Del Cliente</div></div>
    <div class="panel-body">
      <br>
<?php
$ID = $_GET["ID"]; 
echo "$ID";
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("SELECT * from cliente WHERE cedula = $ID");
?>
<table class="table table-bordered" >
<thead>
  <th bgcolor="#8CC63F">Datos del cliente</th>
</thead>
<thead>
  <th>Cedula</th>
  <th>Nombre</th>
  <th>Apellido</th>
  <th>Direecion</th>
  <th>TelefonoUno</th>
  <th>TelefonoDos</th>
  <th>Correo</th>
</thead>

<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
while($r=$products->fetch_object()):
  ?>
<tr>
  <td><?php echo $v->cedula;?></td>
  <td><?php echo $v->nombreCliente;?></td>
  <td><?php echo $v->apellidoCliente;?></td>
  <td><?php echo $v->direccion;?></td>
  <td><?php echo $v->telefonoUno;?></td>
  <td><?php echo $v->telefonoDos;?></td>
  <td><?php echo $v->correo;?></td>

  <?php

  ?>
  <?php if($found):?>
  <?php else:?>
    </div>
  </form> 
  <?php endif; ?>
  </td>
</tr>
<?php endwhile; ?>
</table>
<br><br>


<?php
$ID = $_GET["ID"]; 
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("SELECT * from transferencia WHERE cedulaCliente = $ID");
?>
<table class="table table-bordered" >
<thead>
  <th bgcolor="#8CC63F">Pagos Por Transferencia</th>
</thead>
<thead>
  <th>Cedula</th>
  <th>Monto</th>
  <th>Banco</th>
  <th>Numero de referencia</th>
  <th>fecha de pago</th>
</thead>


<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
while($r=$products):
  ?>
<tr>
  <td><?php echo $r->cedulaCliente;?></td>
  <td><?php echo $r->monto;?></td>
  <td><?php echo $r->banco;?></td>
  <td><?php echo $r->referencia;?></td>
  <td><?php echo $r->fecha;?></td>

  <?php

  ?>
  <?php if($found):?>
  <?php else:?>
    </div>
  </form> 
  <?php endif; ?>
  </td>
</tr>
<?php endwhile; ?>
</table>
<br><br>

