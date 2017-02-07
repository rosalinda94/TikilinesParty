<?php
/*
* Este archio muestra los productos en una tabla.
*/
session_start();
include "conection.php";
include "headeradmi.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>


  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
    <br></br>
<div class="panel panel-primary">
    <div class="panel-heading text-success text-center" >Lista de Usuario</div></div>
    <div class="panel-body">
      <br>
     <a href="registroCliente.php" class="btn btn-primary">Registro Cliente</a>  

<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("select * from cliente");
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
  <th>Registro</th>

</thead>

<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
while($r=$products->fetch_object()):
  ?>
<tr>
  <td><center><a href="prueb.php?ID=<?php echo $r->cliente_cedula;?>"><?php echo $r->cedula;?></a></td>
  <td><?php echo $r->usuario;?></td>
  <td><?php echo $r->apellidoCliente;?></td>
  <td><?php echo $r->direccion;?></td>
  <td><?php echo $r->telefonoUno;?></td>
  <td><?php echo $r->telefonoDos;?></td>
  <td><?php echo $r->correo;?></td>
  <td><?php echo $r->registro;?></td>

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