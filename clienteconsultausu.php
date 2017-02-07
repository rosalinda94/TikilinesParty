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
    <div class="panel-heading text-success text-center" >Datos del Cliente</div></div>
    <div class="panel-body">
      <br>
<?php
$ID = $_GET["id"]; 
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("SELECT * from cliente WHERE cedula = $id");
?>
<table class="table table-bordered" >
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
while($r=$products->fetch_object()):
  ?>
<tr>
  <td><?php echo $r->cedula;?></td>
  <td><?php echo $r->usuario;?></td>
  <td><?php echo $r->apellidoCliente;?></td>
  <td><?php echo $r->direccion;?></td>
  <td><?php echo $r->telefonoUno;?></td>
  <td><?php echo $r->telefonoDos;?></td>
  <td><?php echo $r->correo;?></td>

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

    </div>
  </div>
</div>
</body>

     <footer>
            <?php require 'footer.php' ?>
        </footer>
</html>