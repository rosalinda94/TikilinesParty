
<?php
include "header.php";

session_start();
//Asignamos todos los valores guardados en la sesion a la variable $carro, como hicimos en las paginas anteriores
$carro = $_SESSION['carro'];
//$products es la variable que usaremos para mostrar los productos en esta pagina (separados por '+')
$products = '';
//$products2 es la que usaremos para enviar a Paypal (separados por ',')
$products2 = '';
foreach ($carro as $k => $v) {
    $unidad = $v['cantidad'] > 1 ? " unidades de " : " unidad de ";
    $products.=$v['cantidad'] . $unidad . $v['nombreProducto'] . " . ";
    $products2.=$v['cantidad'] . $unidad . $v['nombreProducto'] . ", ";
}
//eliminamos el ultimo '+':
$products = substr($products, 0, (strlen($products) - 1));
//eliminamos la ultima coma y el espacio que sigue a la misma:
$products2 = substr($products2, 0, (strlen($products2) - 2));

?>
<br>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<center><h2>Detalles del Alquiler</h2></center>
    <form class="form-horizontal" name="Formulario" method="POST" action="prueba.php">

        <!-- El texto del usuario-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="cedula">Cedula *</label>
            <div class="col-md-2">
                 <input id="cedula" name="cedula" type="text" placeholder="Ingrese Cedula" maxlength="8" class="form-control input-md" required="">
        </div>
        </div>
        
                <div class="form-group">
            <label class="col-md-4 control-label" for="nombre"> Fecha de Envio de los Productos *</label>
            <div class="col-md-4">
                <input type="date" step="1" min="2017-01-01" max="2017-12-31" value="01-02-2017" name="fechaEnvio">
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="telefono2">Fecha de la Reserva de los Productos *</label>
            <div class="col-md-4">
            <input type="date" step="1" min="2017-01-01" max="2017-12-31" value="01-02-2017" name="fechaReserva">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="telefono2">Cantidad de dias de alquiler *</label>
            <div class="col-md-2">
<input name="cantidaddia" type="number" value="cantidaddia"  min="1" class="form-control" placeholder="Cantidad" maxlength="3" required="">            </div>
        </div>

        <!-- correo del usuario-->
         <div class="form-group">
            <label class="col-md-4 control-label" for="direccion">Direcccion *</label>
            <div class="col-md-4">
                <textarea id="direccion" name="direccion" textarea placeholder="Ingrese Direccion" maxlength="70" class="form-control input-md" required="" ></textarea>
            </div>
        </div>


  <div class="form-group">
           <label class="col-md-4 control-label" for="clave"></label>
<div class="panel-heading  text-center" >NOTA: (*) Estos campos son obligatorios para realizar el registro.     </div>
        </div> 


        <!--El boton de enviar -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="enviar"></label>
            <div class="text-center col-md-4">
                <button type="submit" id="enviar" name="enviar" class="btn btn-primary btn-block">Enviar</button>

                <!-- todos los botones tienen que ser submit si se enviara el formulario -->
            </div>
        </div>