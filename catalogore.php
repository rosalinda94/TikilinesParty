<?php
ob_start("ob_gzhandler");

session_start();
         include "headerre.php";
include "conexionaudi.php";


if (isset($_SESSION['carro']))
    $carro = $_SESSION['carro'];
else
    $carro = false;
//y hacemos la consulta
?>
<br>
<br>
<div class="h1"><img src="images/aaa.png" alt="" height="70" width="70"><h1>Productos Almacenados!</h1></div>


    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

<?php

$qry = mysql_query("select * from producto order by id asc");
?>
<html>
    <head>

<table class="table table-bordered " >
<thead>
    <th><center>Productos</th>
    <th><center>Descripcion</th>
    <th><center>Precio</th>
    <th><center>Cantidad Disponible</th>
    <th><center>Adquirir</th>

</thead>
             
            <?php
//mostramos todos nuestros
//art�culos, viendo si han
//sido agregados o no a nuestro
//carro de compra
            while ($row = mysql_fetch_assoc($qry)) {
                ?>

                <tr valign="middle" class="catalogo">
              
                    <td><center><?php echo $row['nombreProducto'] ?></td>
                    <td><center><?php echo $row['descripcionProducto'] ?></td>
                    <td><center><?php echo $row['precioProducto'] ?></td>
                    <td> <center><?php echo $row['cantidadProducto'] ?></center></td>

                    <td align="center">

                        <?php
                        if (!$carro || !isset($carro[md5($row['id'])]['identificador']) || $carro[md5($row['id'])]['identificador'] != md5($row['id'])) {

                            ?>
            <a href="agregacar.php?<?php echo SID ?>&id=<?php echo $row['id'];?>">
         <img src="images/productonoagregado.gif" border="0" title="Agregar al Carrito"></a><?php
                        } else {

                            ?><a href="borracar.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>">
                                <img src="images/productoagregado.gif" border="0" title="Quitar del Carrito"></a><?php } ?></td>
                </tr><?php } ?>
        </table>
        <center> <a href="vercarrito.php?<?php echo SID ?>" class="btn btn-primary">Ver Reservas</a>  </center> 

    </body>
            <footer>
            <?php require 'footer.php' ?>
        </footer>
</html>
<?php
ob_end_flush();
?>
