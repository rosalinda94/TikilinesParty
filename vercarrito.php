<?php
         include "headerre.php";

session_start();
if(!isset($_SESSION["nada"])){
    header('Location: ingresar.php');
}

session_start();
$carro = $_SESSION['carro'];
?>
<html>
<br></br>
    <head>
        <title>PRODUCTOS AGREGADOS AL CARRITO</title>
      
    </head>
    <body>
            <div class="h1"><img src="images/aaa.png" width="80" alt=""><h1>Reserva de Productos</h1></div>
        <?php
        if ($carro) {
            ?>
            <br></br>
            <center>
<table class="table table-bordered" >
<thead>
            <th>Producto</th>
                    <td width="50" align="center">
            <th>Precio</th>
                    <td width="50" align="center">
            <th>Cantidad</th>
                    <td width="50" align="center">
            <th>Borrar</th>
                    <td width="50" align="center">
            <th>Modificar</th>
                </thead>
           <?php
            $contador = 0;
            $suma = 0;
            foreach ($carro as $k => $v) {
                $subto = $v['cantidad'] * $v['precioProducto'];
                $suma = $suma + $subto;
                $contador++;
                ?>
                <form name="a<?php echo $v['identificador'] ?>" method="post" action="agregacar.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>">
                    <tr bgcolor="<?php echo $color[$contador % 2]; ?>" class='prod'>
                    <td><?php echo $v['nombreProducto'] ?></td>                    
                    <td width="50" align="center">
                    <td><?php echo $v['precioProducto'] ?></td>
                    <td width="50" align="center">
                    <td><?php echo $v['cantidad'] ?></td> 
                    <td width="50" align="center">

                                    <input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>"> </td>

                     <td align="center"><a href="borracar.php?<?php echo SID ?>&id=<?php echo $v['id'] ?>">
                     <img src="images/trash.gif" width="12" height="14" border="0"></a></td>
                                        <td width="50" align="center">

                    <td align="center">
                    <input name="imageField" type="image" src="images/actualizar.gif" width="20" height="20" border="0"></td>
                        </tr></form>
                <?php } ?>
            </table>
            <div align="center">
            </div><br>
            <div align="center"><span class="prod">Total: Bs <?php echo number_format($suma, 2); ?></span></div>
            <br>
            <div align="center"><span class="prod">Continuar la seleccion de productos</span>

                <a href="catalogore.php?<?php echo SID; ?>"><img src="images/continuar.gif" width="13" height="13" border="0" align="absmiddle"></a>
     <br>
     <br>

     <a href="regpago.php?<?php echo SID; ?>&costo=<?php echo $suma; ?>"><img src="images/finalizarcompra.gif" width="135" height="16" border="0" align="absmiddle"></a>
            </div>
        <?php } else { ?>
    <span class="prod">No hay productos seleccionados</span> <a href="catalogore.php?<?php echo SID; ?>"><img src="images/continuar.gif" width="13" height="13" border="0"></a>
                <?php } ?>

        </p></center>
    </body>
</html> 