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
    <div class="panel-heading text-success text-center" >Contratos Realizados</div></div>
    <div class="panel-body">
      <br>

<?php
  //   <a href="eliminarcontrato.php" class="btn btn-primary">Eliminar Contrato</a>  

/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("select * from contrato");
?>
<table class="table table-bordered" >
<thead>
  <th>Cedula del cliente</th>  
  <th>Manera de pago</th>
  <th>Fecha de la reserva</th>
  <th>Fecha del evento</th>
  <th>Fecha del envio</th>
  <th>Direccion</th>
  <th>Productos</th>

</thead>


<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
while($r=$products->fetch_object()):
  ?>
<tr>
  <td><a href="clienteconsulta.php?ID=<?php echo $r->cliente_cedula;?>"><?php echo $r->cliente_cedula;?></a></td>
  <td><?php echo $r->pago;?></td>
  <td><?php echo $r->fecha;?></td>
  <td><?php echo $r->fechaReserva;?></td>
  <td><?php echo $r->fechaEnvio; ?></td>
  <td><?php echo $r->direccionEnvio; ?></td>
  <td><?php echo $r->products; ?></td>
  <?php


endwhile; ?>
</table>
<br><br>  

    </div>
  </div>
</div>
</body>
     <footer>
            <?php require 'footer.php' ?>
        </footer>
</html>