<?php
$servidor = "localhost";
$usuario = "root";
$clave = "123456";
$base_de_datos = "sistema";

mysql_connect($servidor, $usuario, $clave) or die(mysql_error()) ;
mysql_select_db($base_de_datos) or die(mysql_error()) ;

?>
