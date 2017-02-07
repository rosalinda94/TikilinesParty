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
    <div class="panel-heading text-success text-center" >Lista de Producto</div></div>
    <div class="panel-body">
      <br>
          <a href="registroproductousu.php" class="btn btn-primary">Registro Cliente</a>  

<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("select * from producto");
?>
<table class="table table-bordered" >
<thead>
  <th>ID</th>
  <th>Producto</th>
  <th>Descripcion</th>
  <th>Precio</th>
  <th>Cantidad</th>

</thead>

<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
while($r=$products->fetch_object()):
  ?>
<tr>
  <td><?php echo $r->id;?></td>
  <td><?php echo $r->nombreProducto;?></td>
  <td><?php echo $r->descripcionProducto;?></td>
  <td>Bs <?php echo $r->precioProducto; ?></td>
  <td><?php echo $r->cantidadProducto;?></td>
  <?php

  ?>
  </form> 
  </td>
</tr>
<?php endwhile; ?>
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