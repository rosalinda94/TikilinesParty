<?php
//REGISTRO cliente por usuario 
require 'headerusu.php' ?>

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

$base = mysql_select_db ("Sistema",$con);$sql = "SELECT * FROM producto";

$resultado = mysql_query($sql);
/*ahora creamos la tabla en html para mostrar los resultados
agregandole un par de botones de radio */
echo "<html>
        <body>
        <form name='ejecuta' method='post' action='guardarproduusu.php'>
            <table>
        <thead>
  <th>ID</th>
  <th>Producto</th>
  <th>Descripcion</th>
  <th>Cantidad</th>
  <th>Precio</th>
    <th>Modificar</th>

</thead>";
$i = 0 ; //iniciamos nuestro cont en cero
/*el siguiente bucle nos permite obtener la informacion obtenida
de la ejecución de la sentencia de sql */
while ($row = mysql_fetch_row($resultado)){
    
            echo "<tr><td><input type='hidden' name='id[$i]' value='".$row[0]."' />".$row[0]."</td>
                      <td><input type='text' name='nombreProducto[$i]' value='".$row[1]."' /></td>
                      <td><input type='text' name='descripcionProducto[$i]' value='".$row[2]."'/></td>
                      <td><input type='text' name='cantidadProducto[$i]' value='".$row[3]."'/></td>
                      <td><input type='text' name='precioProducto[$i]' value='".$row[4]."'/></td>

                      <td><input type='checkbox' name='seleccion[$i]' value='modifica".$row[0]."'></td><!-- Esta línea es para saber si se modifica -->
                      </tr>";$i++; 
}
echo "</table><input type='submit' value='Enviar'></form></body></html>";
?>
</ul>
</div>
</section>

     <footer>
            <?php require 'footer.php' ?>
        </footer>
</html>