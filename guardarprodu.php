<?php
//REGISTRO cliente por usuario 
require 'headeradmi.php' ?>

<center>

  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
    <br></br>
<div class="panel panel-primary">
    <div class="panel-heading text-success text-center" >Modificar Producto</div></div>
    <div class="panel-body">
      <br>
<?php

$con = mysql_connect("localhost","root","123456");
if (! $con){die ("ERROR EN LA CONEXION CON MYSQL: ".mysql_error());}

$base = mysql_select_db ("Sistema",$con);

if(! $base){die ("ERROR AL CONECTAR CON LA BASE DE DATOS: ".mysql_error());}
/********************************************
iniciamos el ciclo con el que obtendremos lo que envio el formulario
**************************************************************/
foreach ($_POST['seleccion'] as $indice => $valor){
//Vamos a verificar si trae la opcion de eliminar o modificar
$opcion = substr ($_POST['seleccion'][$indice],0,-1); //extraemos la parte de la cadena que elimina y/o modifica
switch($opcion){
//generamos la sentencia para la modificación filtrando por el id para que solo cambie ese registro
	case 'modifica':$sql="UPDATE producto SET 
	                      nombreProducto='".$_POST['nombreProducto'][$indice]."',
	                      descripcionProducto='".$_POST['descripcionProducto'][$indice]."',
	                      cantidadProducto='".$_POST['cantidadProducto'][$indice]."',
						  precioProducto=".$_POST['precioProducto'][$indice]."
						  WHERE id=".$_POST['id'][$indice];break;
						  
	case 'elimina':$sql="DELETE FROM producto WHERE id=".$_POST['id'][$indice];break;
	default: echo "<center>NO HAY NADA SELECCIONADO</center>"; break;
}
$resultado = mysql_query($sql);
if (! $resultado ){die ("ERROR AL EJECUTAR LA CONSULTA ".$_POST['seleccion'].":".mysql_error());}
else{
	echo "";
}
}
$operacion = ModificoProducto;
$usuario = Admin;
$fecha=date("Y-m-d");
$hora=date("h:i:s");

$auditoria= "INSERT INTO auditory (usuario,fecha ,hora, operacion ) VALUES('$usuario','$fecha','$hora','$operacion')";
$query = mysql_query($auditoria);
$fecthAssoc = mysql_fetch_assoc($query);

if ($fecthAssoc) {
    echo "";
   
} else {
    echo "" ;
}
?>
<meta http-equiv="refresh" content="0; url=modificarproducto.php" />
