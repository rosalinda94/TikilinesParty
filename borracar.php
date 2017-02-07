<?php
include "headerre.php";
if(!isset($_SESSION["nada"])){
    header('Location: ingresar.php');
}


session_start();
extract($_GET);
$carro=$_SESSION['carro'];
unset($carro[md5($id)]);
$_SESSION['carro']=$carro;
header("Location:catalogore.php?".SID);
?>
