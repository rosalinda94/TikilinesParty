          <?php include "headeradmi.php";?>

    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
            <br><br>
<div class="panel panel-primary">
    <div class="panel-heading text-success text-center" >Registro de Administrador</div></div>
    <div class="panel-body">

<form class="form-horizontal" name="Formulario" method="POST" action="conexionregistro.php">
    <fieldset>
        <!-- El texto del usuario-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="nombre"> Nombre *</label>
            <div class="col-md-4">
                <input id="nombre" name="nombre" type="text" placeholder="Ingrese Nombre"  required maxlength="30" class="form-control input-md" required="">
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="cedula">Cedula *</label>
            <div class="col-md-4">
                 <input id="cedula" name="cedula" type="text" placeholder="Ingrese Cedula" pattern="[0-9]{8}" required maxlength="8" class="form-control input-md" required="">
        </div>
</div>

        <!-- El texto de la clave espacio en blancot-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="clave">Clave *</label>
            <div class="col-md-4">
                <input id="clave" name="clave" type="password" placeholder="Ingrese su clave"  maxlength="14" class="form-control input-md" required="">
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
                <button type="submit" id="enviar" name="enviar" class="btn btn-success">Enviar</button>

                <!-- todos los botones tienen que ser submit si se enviara el formulario -->
            </div>
        </div>