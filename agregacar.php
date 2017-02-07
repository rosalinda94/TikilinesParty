<?php
         include "headerre.php";

session_start();
if(!isset($_SESSION["nada"])){
    header('Location: ingresar.php');
}

session_start();
extract($_REQUEST);
mysql_connect("localhost","root","123456");
mysql_select_db("Sistema");
if(!isset($cantidad)){$cantidad=1;}
$qry=mysql_query("select * from producto where id='".$id."'");
//$qry=mysql_query("UPDATE producto Set cantidad='$cantidad'  where id='".$id."'");
$row=mysql_fetch_array($qry);
if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];
$carro[md5($id)]=array('identificador'=>md5($id),
'cantidad'=>$cantidad,'nombreProducto'=>$row['nombreProducto'],
'precioProducto'=>$row['precioProducto'],'id'=>$id);
$_SESSION['carro']=$carro;
header("Location:catalogore.php?".SID);
?>