<!DOCTYPE html>
<html lang="es">

    
<body background="7.jpeg">
      <br></br>
      <br></br>
      <br></br>
      <br></br>
      <br></br>
          <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
            <header>
    <?php 
        //INICIAR SESION PARA ADMINISTRADOR
        //comprueba si no se ha creado la sesion    
        if(!isset($_SESSION)){
            //inicia la sesion
            session_start();
            //si la variable de sesion "usuario" no se ha creado o esta null
            if(empty($_SESSION['rosa'])){
                ?><center>      <tr>
        <td width="554" align="center"><img src="images/usuario.png" width="100" height="100"  alt=""/></td>
        </tr>
      <tr>
            <form action="logusu.php" method="POST">   
                    <h2>Inicie Sesion para Usuario</h2>
                    <label for="txtUsuario" class="lblLargo">Ingrese su nombre</label>
                    <input type="text" id="txtUsuario" name="txtUsuario" autofocus/>
                    <br/>
                    <label for="usuario" class="lblLargo">Ingrese su contrase&ntilde;a</label>
                    <input type="password" id="txtPass" name="txtPass"/>
                    <br/>
                    <button type="submit"  class="btn" id="btnIngresar">Ingreso</button>
                    <button type="reset" class="btn" id="btnLimpiar">Limpiar</button>
                            <?php 
        //archivo con el cual salimos de la sesion(deslogeo).
        echo "<a href='salirSesion.php'>Salir del Sistema</a>";

            //en caso que la variable de sesion "usuario" tenga un valor
            //significa que ya se ha creado una sesion    
            }else{
                //Muestra la bienvenida personalizada al usuario logeado con su nombre y su rol
                //este es un vinculo para poder regresar al inicio del sitio
                echo "<a href='listaproductousu.php'>Inicio</a>";
                //si el usuario esta logeado se debe verificar cual el su rol o nivel de acceso(ADMIN, USER, CLIENTE, ETC)
                //para poder gestionar sus derechos de acceso.
                //si el rol del usuario logeado es cliente.
                if($_SESSION['tipo']=='cliente'){
                ?>
                <!--Llamamos a las funcionalidades y la pantalla de bienvenida (home) del cliente-->
                <!--Incluye por medio de Ajax(jQuery con la funcion load) la pantalla con las funciones del CLIENTE
                dentro del section con id contenido.-->    
                    <?php 
                }        
            }
        }
    ?>
    </header>
    <!--CONTENEDOR DONDE SE INCLUIRAN POR MEDIO DE AJAX CON JQUERY LAS FUNCIONALIDADES DE LOS USUARIOS LOGEADOS Y NO LOGEADOS(FORM DE INGRESO)-->
    <section id="contenido">
    </section>

    </body>
</html>
