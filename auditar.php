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
    <div class="panel-heading text-success text-center" >Auditoria</div></div>
    <div class="panel-body">
      <br>
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("SELECT * FROM auditory");
?>
<table class="table table-bordered" >
<thead>
  <th>FECHA</th>
  <th>HORA</th>
    <th>USUARIO</th>

  <th>OPERACION</th>

</thead>

<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
while($r=$products->fetch_object()):
  ?>
<tr>
  <td><?php echo $r->fecha;?></td>
  <td><?php echo $r->hora;?></td>
  <td><?php echo $r->usuario;?></a></td>  

  <td><?php echo $r->operacion;?></td>

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