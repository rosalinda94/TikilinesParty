
<!DOCTYPE html>
<html lang="es">
    <head>
<body background="2.jpeg">

        <link rel="stylesheet" type="text/css" href="estilo.css">
        <script type="text/javascript" src="jquery.js"></script>
    </head>
    
    <body>
    <header>

    <br></br>

    <br></br>   
    <?php 

//INICIAR SESSION PARA ADQUIRIR PRODUCTO

        //comprueba si no se ha creado la sesion    
        if(!isset($_SESSION)){
            //inicia la sesion
            session_start();
            //si la variable de sesion "usuario" no se ha creado o esta null
            if(empty($_SESSION['cliente'])){
                ?><center>
                 <div class="logo"><a href="index.php" title="Inicio"><img src="images\logom.jpg" alt="LOGO"></a></div>
                <!--Muestra el ambiente de bienvenida y notifica que no ha iniciado sesion-->
                <h3>Debe iniciar sesion para poder adquirir los productos</h3>
                
                <!--Incluye por medio de Ajax(jQuery con la funcion load) el formulario de inicio de sesion
                dentro del section con id contenido.-->
            <form action="logear.php" method="POST">   
                    <h3>Por favor ingrese su cedula y contrase&ntilde;a</h3>
                    <label for="txtUsuario" class="lblLargo">Ingrese su cedula</label>
                    <input type="text" id="txtUsuario" name="txtUsuario" autofocus/>
                    <br/>
                    <label for="txtUsuario" class="lblLargo">Ingrese su contrase&ntilde;a</label>
                    <input type="password" id="txtPass" name="txtPass"/>
                    <br/>
                    <br></br>
                    <button type="submit"  class="btn" id="btnIngresar">Ingreso</button>
                    <button type="reset" class="btn" id="btnLimpiar">Limpiar</button>
                            <?php 
        //archivo con el cual salimos de la sesion(deslogeo).
        echo "<a href='index.php'>Regresar </a>";
        ?>
            </form>     </center>
                <?php
            //en caso que la variable de sesion "usuario" tenga un valor
            //significa que ya se ha creado una sesion    
            }else{
                //Muestra la bienvenida personalizada al usuario logeado con su nombre y su rol
                echo "<h1>Bienvenido cliente: ". $_SESSION['cliente']." </h1>";  
                //este es un vinculo para poder regresar al inicio del sitio
                echo "<a href='index.php'>Inicio</a>";
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
