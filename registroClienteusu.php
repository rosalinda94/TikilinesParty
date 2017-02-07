          <?php include "headerusu.php";?>

    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
            <br><br>
<div class="panel panel-primary">
    <div class="panel-heading text-success text-center" >Registro de nuevo usuario</div></div>
    <div class="panel-body">

<form class="form-horizontal" name="Formulario" method="POST" action="conexionclienteusu.php">
    <fieldset>
        <!-- El texto del usuario-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="nombre"> Nombre *</label>
            <div class="col-md-4">
                <input id="nombre" name="nombre" type="text" placeholder="Ingrese Nombre"  maxlength="30" class="form-control input-md" required="">
            </div>
        </div>

         <div class="form-group">
            <label class="col-md-4 control-label" for="apellido">Apellido *</label>
            <div class="col-md-4">
                <input id="apellido" name="apellido" type="text" placeholder="Ingrese Apellido" maxlength="30" class="form-control input-md" required="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="cedula">Cedula *</label>
            <div class="col-md-4">
                 <input id="cedula" name="cedula" pattern="[0-9]{8}" type="text" maxlength="8" placeholder="Ingrese Cedula" class="form-control input-md" required="">
        </div>
</div>

        <!-- El texto de la clave espacio en blancot-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="clave">Clave *</label>
            <div class="col-md-4">
                <input id="clave" name="clave" type="password" placeholder="Ingrese su clave" class="form-control input-md" required="">
            </div>
        </div>

         <div class="form-group">
            <label class="col-md-4 control-label" for="direccion">Direcccion *</label>
            <div class="col-md-4">
                <textarea id="direccion" name="direccion" textarea placeholder="Ingrese Direccion" maxlength="50" class="form-control input-md" required="" ></textarea>
            </div>
        </div>


         <div class="form-group">
            <label class="col-md-4 control-label" for="telefono">Telefono *</label>
            <div class="col-md-4">
                <input id="telefono" name="telefono" type="text" placeholder="Ingrese su Telefono" maxlength="11" class="form-control input-md" required pattern="[0-9]{11}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="telefono2">Telefono Dos</label>
            <div class="col-md-4">
                <input id="telefono2" name="telefono2" type="text" placeholder="Ingrese su Telefono" maxlength="11" class="form-control input-md" pattern="[0-9]{11}">
            </div>
        </div>

        <!-- correo del usuario-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="correo">Correo *</label>
            <div class="col-md-4">
                <input id="correo" name="correo" type="text" placeholder="ejemplo@agenciadefestejos.com"  maxlength="50"class="form-control input-md" required="">

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
