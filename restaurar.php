<?php include 'core.php';?>
<?php include 'headeradmi.php';?>
<?php

/*Conexion MySQLi*/

$hostname = 'localhost'; // Your host name
$database = 'sistema'; // Your database name here
$username = 'root'; // Your mysql username here
$password = '123456'; // Your mysql password here

if ($database == '') {
  ?>

  <center>
  <div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    Debes configurar el archivo de conexion con MySQL ubicado en src/php/conexion.php
    <br> <small>Error: El nombre de la base de datos no ha sido definido.</small>
  </div>
  <?php
}
# De lo contrario hace la conexion
else{
  # conexion MySQLi
  $sql = new mysqli($hostname, $username, $password, $database);
  if ($sql->connect_errno) {
    echo "Error de conexión MySQLi" . '<br>';
    echo "Conexión Error: " . $sql->error;
  }
  else{
    date_default_timezone_set('America/Caracas');
    $sql->query("SET NAMES UTF8");
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
<center>
<br>
    <title>Exportar Base de datos [<?php echo $database; ?>]</title>
    <link rel="stylesheet" href="<?php echo FOLDER_ROOT . 'src\\css\\bootstrap-spacelab.css' ?>">
  </head>
  <body>
    <div class="container">
      <div class="row">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Restaurar base de datos</h3>
              </div>
              <div class="panel-body">
                <form method="post" action="" enctype="multipart/form-data">
                  <!--Input file-->
                  <div class="form-group">
                    <input type="file" name="fichero" id="fichero" accept=".txt, .sql" class="filestyle" data-buttonText="Buscar archivo" data-icon="false">
                    <span class="label label-warning">10Mb maximo.</span>
                    <!--Peso maximo en Kb del archivo-->
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                    <hr>

        <div class="form-group">
            <label class="col-md-4 control-label" for="enviar"></label>
            <div class="text-center col-md-4">
                <button type="submit" id="enviar" name="enviar" class="btn btn-success">Enviar</button>
                    <hr>
                    <div class="form-group" id="respuesta">
<?php
if ($_FILES) {
  # El fichero temporal almacenado en el navegador
  $tmp  = $_FILES['fichero']['tmp_name'];
  # El tipo de fichero aceptado (sql/txt) Proximamente ZIP O RAR
  $tipo = $_FILES['fichero']['type'];
  # El peso del fichero, lo vamos a limitar mas adelante a 10Mb (10000000Kb)
  $size = $_FILES['fichero']['size'];
  # Este filtro permite evaluar si el fichero es aceptado por el peso
  if ($size > '10000000'){
    echo '<div class="alert alert-dismissible alert-danger">';
    echo '<button type="button" class="close" data-dismiss="alert">X</button>';
    echo '<strong>¡Error!</strong> Este fichero sobrepasa el tamaño maximo (10Mb).</div>';
    return 0;
  }
  # Este filtro permite evaluar si el fichero es aceptado por el tipo
  if($tipo == 'text/plain' OR $tipo == 'application/octet-stream'){
    # Archivo de conexion MySQL
    # Abriendo en buffer el archivo subido
    $handle = fopen($tmp, 'rb');
    # Archivo temporal en la carpeta de la aplicacion
    $excecute = fopen('tmp_file.txt', 'w');
    # Miestras encuentre lineas
    while (!feof($handle)) {
    # Buffer de datos
    $buffer = fgets($handle);
    if (substr_count($buffer, '--'))
      $buffer = '';
    if (substr_count($buffer, '/*'))
      $buffer = '';

    $buffer = str_replace(PHP_EOL, '', $buffer);
    /*Eliminar saltos de linea*/
    $buffer = trim($buffer, "\n");
    /*Hacer saltos de linea en los punto y coma*/
    $buffer = str_replace(';', ';'.PHP_EOL, $buffer);
    $buffer = str_replace('AUTO_INCREMENT', ' AUTO_INCREMENT', $buffer);
    $buffer = str_replace('DEFAULT', ' DEFAULT', $buffer);
    fwrite($excecute, $buffer);
    }
    # Cerramos el archivo temporal del navegador
    fclose($handle);
    # Abrir el archivo temporal de la aplicacion
    $excecute = fopen('tmp_file.txt', 'rb');
    # Almacenar todas las consultas en un array para verificar que todas se
    # ejecuten correctamente, de igual manera para las que no
    $query_ok = array();
    $query_no = array();
    # Ejecutar las lineas del fichero
    while (!feof($excecute)) {
      # El buffer de datos, linea por linea
      $buffer = fgets($excecute);
      # Cuando la cadena recibida tenga una longitud de mas de 2
      if (strlen($buffer) > 2) {
        # Ejecuta la consulta
        $rs = $sql->query($buffer);
        # Cuando encuentre algun tipo de error
        if ($rs)
          $query_ok[] = $buffer;
        else
          $query_no[] = $buffer;
      }
    }
    # Cerrando el archivo subido en el navegador
    fclose($excecute);
    # Eliminar el fichero temporal
    unlink('tmp_file.txt');
    # Retornando una respuesta al navegador
    echo '<strong>¡Correcto!</strong> El archivo fue procesado con exito.';
    echo '<br>Consultas con exito: '.count($query_ok).'<br>Consultas fallidas: '.count($query_no);'</div>';
    unset($_POST);
    unset($_FILES);
    return 0;
  }
  else{
    echo '<strong>¡Error!</strong> Este tipo de archivo no es aceptado por el sistema.';
    echo '<br>Seleccione un fichero con extensiones .txt o .sql</div>';
    return 0;
  }
}
?>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
