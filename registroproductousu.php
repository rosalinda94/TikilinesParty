          <?php include "headerusu.php";?>

    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
            <br><br>
<div class="panel panel-primary">
    <div class="panel-heading text-success text-center" >Registro de nuevo Producto</div></div>
    <div class="panel-body">

<form class="form-horizontal"  enctype="multipart/form-data" name="Formulario" method="POST" action="conexionproductousu.php">
    <fieldset>
        <!-- El texto del usuario-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="nombre"> Nombre *</label>
            <div class="col-md-4">
                <input id="nombre" name="nombre" type="text" placeholder="Ingrese Nombre" maxlength="30" class="form-control input-md" required="">
            </div>
        </div>

         <div class="form-group">
            <label class="col-md-4 control-label" for="descripcion">Descripcion *</label>
            <div class="col-md-4">
                <input id="descripcion" name="descripcion" type="text" placeholder="Ingrese descripcion"  maxlength="30"class="form-control input-md" required="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="cantidad">Cantidad *</label>
            <div class="col-md-4">
                 <input id="cantidad" name="cantidad" type="text" placeholder="Ingrese cantidad" maxlength="5" class="form-control input-md" required="">
        </div>
</div>

        <!-- El texto de la clave espacio en blancot-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="precio">Precio *</label>
            <div class="col-md-4">
                <input id="precio" name="precio" type="text" placeholder="Ingrese precio" maxlength="8" class="form-control input-md" required="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="imagen">Imagen *</label>
            <div class="col-md-4">
                <input id="imagen" name="imagen" type="file" class="form-control input-md" required="">
            </div>
        </div>

  <div class="form-group">
           <label class="col-md-4 control-label" for="clave"></label>
<div class="panel-heading  text-center" >NOTA: (*) Estos campos son obligatorios para realizar el registro de los productos.     </div>
        </div> 


        <!--El boton de enviar -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="enviar"></label>
            <div class="text-center col-md-4">
                <button type="submit" id="enviar" name="enviar" class="btn btn-primary btn-block">Registrar</button>

                <!-- todos los botones tienen que ser submit si se enviara el formulario -->
            </div>
        </div>
