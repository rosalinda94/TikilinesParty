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
    <div class="panel-heading text-success text-center" >Lista de Administradores</div></div>
    <div class="panel-body">
      <br>
          <a  href="registroadusu.php" class="btn btn-primary">Registro Administrador</a>  
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("SELECT * from usuario");
?>
<table class="table table-bordered" >
<thead>
  <th>Cedula</th>
  <th>Nombre</th>
  <th>Clave</th>
  
</thead>

<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
while($r=$products->fetch_object()):
  ?>
<tr>
  <td><?php echo $r->cedula;?></td>
  <td><?php echo $r->usuario;?></td>
  <td><?php echo $r->password;?></td>

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