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
if(!isset($_SESSION["rosa"])){
    header('Location: usuario.php');
}
?>
     
<center>

<?php
echo "Bienvenido "."".$_SESSION['rosa'];
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
                            <li><a href="listaproductousu.php">Lista de Producto</a></li>
                            <li><a href="registroproductousu.php">Registrar Producto</a></li>
                            <li><a href="modificarproductousu.php">Modificar Producto</a></li>

                        </ul>  
                    <li><a href="#">Usuarios</a>
                        <ul>
                        <li><a href="registroClienteusu.php">Registrar Cliente</a></li>
                         <li><a href="listausuariousu.php">Usuarios Registrados</a></li>
                        </ul>    
                         <li><a href="#">Reportes</a>
                        <ul>
                            <li><a href="reportesusu.php">Contratos Realizado</a></li>
                            <li><a href="auditarusu.php">Auditoria</a></li>
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

