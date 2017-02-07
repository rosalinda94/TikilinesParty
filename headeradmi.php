<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/reset.css" type="text/css"  />
<link rel="stylesheet" href="css/style.css" type="text/css"  />
<link href="#" rel="shortcut icon" type="Imagenes/logo.jpg" /> <!--Icono de la pagina-->  

<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/jquery.innerfade.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
<script type="text/javascript" language="javascript">
        $(function() {
                $("#tips").innerfade({ animationtype: "slide", speed: 850, timeout: 10000, type: "sequence"});
        });
</script>
<?php
session_start();
if(!isset($_SESSION["administrador"])){
    header('Location: administrador.php');
}
?>
         
<center>

<?php
echo "Bienvenido "."".$_SESSION['administrador'];
?></center>

<title>Tikilines Party Falcon</title>
</head>
<body background="fondo.png">
<div id="container">
        <div id="wrapper">
        <header>
            <nav>
                <ul>
                     <li><a href="#">Productos</a>
                        <ul>
                            <li><a href="listaproducto.php">Lista de Producto</a></li>
                            <li><a href="registroproducto.php">Registrar Producto</a></li>
                            <li><a href="modificarproducto.php">Modificar Producto</a></li>

                        </ul>  
                    <li><a href="#">Usuarios</a>
                        <ul>
                        <li><a href="registroCliente.php">Registrar Cliente</a></li>
                         <li><a href="listausuario.php">Usuarios Registrados</a></li>
                        <li><a href="registroadusu.php">Registrar Administrador</a></li>
                         <li><a href="listaadmin.php">Administrador Registrado</a></li>
                        </ul>    
                         <li><a href="#">Reportes</a>
                        <ul>
                            <li><a href="reportes.php">Contratos Realizado</a></li>
                            <li><a href="auditar.php">Auditoria</a></li>
                            <li><a href="restaurar.php">Restaurar</a></li>
                            <li><a href="respaldo.php">Respaldo</a></li>
                        </ul>   
                    <li><a href="#">Manual</a>
                        <ul>
                            <li><a href="#">Manual de Administrador</a></li>
                            <li><a href="#">Manual de Usuario</a></li>
                        </ul>                           
                         <li><a href="salirSesion.php">Salir</a>


                    <li style="border-right:none"></li>
                </ul>
            </nav>
        </header>

