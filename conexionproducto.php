<?php
include "headeradmi.php";

//conexion a la base de datos
require 'form.php';
 $nombreProducto = $_POST["nombre"];
 $descripcionProducto = $_POST["descripcion"];
 $cantidadProducto = $_POST["cantidad"];
 $precioProducto = $_POST["precio"];  

//comprobamos si ha ocurrido un error.
if ( ! isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){
    echo "INGRESAR IMAGEN";
} else {
    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
    //y que el tamano del archivo no exceda los 16mb
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 16384; //16mb es el limite de medium blob
     
    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
     
        //este es el archivo temporal
        $imagen_temporal  = $_FILES['imagen']['tmp_name'];  
        //este es el tipo de archivo
        $tipo = $_FILES['imagen']['type'];
        //leer el archivo temporal en binario
        $fp     = fopen($imagen_temporal, 'r+b');
        $data = fread($fp, filesize($imagen_temporal));
        fclose($fp);
        //escapar los caracteres
        $data = mysql_escape_string($data);

        $resultado = mysql_query("INSERT INTO producto (nombreProducto,descripcionProducto, cantidadProducto, precioProducto, imagen, tipoimagen) VALUES ('$nombreProducto','$descripcionProducto','$cantidadProducto','$precioProducto','$data', '$tipo')");
        if ($resultado){
    echo "<center><br><br><br>Producto Guardado</br></center>";
        } else {
                echo "<br><br><br>Producto no registrado</br>";

        }
    } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
    }
}

include "conexionaudi.php";

//Consulta
$operacion = registroProducto;
$usuario = Admin;
$fecha=date("Y-m-d");
$hora=date("h:i:s");

$auditoria= "INSERT INTO auditory (usuario,fecha ,hora, operacion ) VALUES('$usuario','$fecha','$hora','$operacion')"; 
if ($conn->query($auditoria) === TRUE) {
    echo "";
   
} else {
    echo "" ;
}
$conn->close();
?> 
<meta http-equiv="refresh" content="1; url=registroproducto.php" />
