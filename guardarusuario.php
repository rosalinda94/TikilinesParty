
<?php
include "header.php";

/* http://programarenphp.wordpress.com
primero creamos nuestra conexion tanto con el 
mysql, como con la base de datos, recuerda que 
el nombre del host, del user y del pass los 
debes de cambiar por los de tu configuración 

descripcion=".$_POST['descripcion'][$indice].",
 */
echo $_POST['id'];
include "conexionaudi.php";

/********************************************
iniciamos el ciclo con el que obtendremos lo que envio el formulario
**************************************************************/
foreach ($_POST['seleccion'] as $indice => $valor){
//Vamos a verificar si trae la opcion de eliminar o modificar
$opcion = substr ($_POST['seleccion'][$indice],0,-1); //extraemos la parte de la cadena que elimina y/o modifica
switch($opcion){
//generamos la sentencia para la modificación filtrando por el id para que solo cambie ese registro
	case 'modifica':$sql="UPDATE usuarios SET 
	                      usuario_nombre='".$_POST['usuario_nombre'][$indice]."',
						  usuario_password=".$_POST['usuario_password'][$indice]."
						  WHERE id=".$_POST['id'][$indice];break;
	
}
$resultado = mysql_query($sql);
if (! $resultado ){die ("ERROR AL EJECUTAR LA CONSULTA ".$_POST['seleccion'].":".mysql_error());}
else{
	echo "<center>SE A MODIFICADO CORRECTAMENTE EL USUARIO<br />";
}
}


//Creamos la conexion con base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Consulta
$operacion = ModificoUsuario;
$usuario = administrador;
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

<meta http-equiv="refresh" content="1; url=modificarusuario.php" />

</div>

</body>
</html>