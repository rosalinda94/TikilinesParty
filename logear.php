<body background="7.jpeg">
<?php

//USUARIO
//inicio la sesion para tener acceso a la creacion de las variables de sesion
session_start();
//recibo el nombre y la contraseña ingresados por el usuario en el formulario de logeo
$usuario = $_POST["txtUsuario"];
$pass = trim($_POST["txtPass"]);

// importo la clase conexion
require_once "mySQLData.php";
//inicializo la clase para acceder a sus atributos atravez del objeto "base"
$base = new mySQLData();
//ejecuto la consulta buscando el nombre y la contraseña ingresados por el usuario
$result = $base->consulta("SELECT * FROM cliente WHERE cedula='$usuario' AND password='$pass'");
//almaceno en "arreglo" en los resultados
$arreglo = mysql_fetch_assoc($result);
//si los resultados son igual a 1 (solo puede haber un usuario con el mismo usuario y contraseña)
if(mysql_num_rows($result) == 1){
    //creo las variables de sesion tipo y usuario con los valores obtenidos en la consulta sql
    $_SESSION["tipo"] = $arreglo['usuario'];
    $_SESSION["nada"] = $arreglo['usuario'];
    /*me redirecciono al index nuevamente pero en esta ocasion ya se ha creado la sesion 
    por lo que se autenticara con el scrip del index y mostrara la pantalla de bienvenida al usuario
    */
    header("location:indexre.php");
}
else{
echo "Usuario no registrado. Intente nuevamente";
}
include "conexionaudi.php";

//Consulta
$operacion = IngresoAlSistema;
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
<meta http-equiv="refresh" content="1; url=ingresar.php" />
</body>
