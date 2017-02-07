<body background="5.jpeg">

<?php

/*
  archivo de conexion y manejo a la base de datos
 */

class mySQLData {

    private $con;

    public function conectar() {
        //paramentros de conexion AJUSTARLOS SEGUN TU CONFIGURACION
        $server="localhost";
        $user= "root";
        $password="123456";
        $base= "sistema";
        $this->con = mysql_connect($server, $user, $password)
                //mensaje a mostrar en caso de error
                or die("Error al conectarse con la base de datos");
        mysql_select_db(Sistema)
                or die("Error al seleccionar la base de datos");
        return $this->con;
    }

    //funcion para realizar una sentencia a la base de datos
    public function consulta($sentenciaSql) {

        //pg_query(conexion a base, la sencia a ejecutar)
        $query = mysql_query($sentenciaSql, $this->conectar());
        return $query;
    }

    /* a esta funcion se le pasa el nombre de la tabla a buscar y 
     * el nombre del campo con los id
     */

    public function buscarId($tabla, $campo) {

        $val = 1;  //valor inicial para el id
        $bucle = true;  //variable que mantendra el bucle en funcionamiento hasta encontrar el espacio


        while ($bucle) {
            $result = mysql_query("SELECT $campo FROM $tabla WHERE $campo=$val", $this->conectar());
            // $result = $this->consulta("SELECT $campo FROM $tabla WHERE $campo=$val");
            //almacena en $n el numero de filas encontradas en la consulta
            $n = mysql_num_rows($result);
            if ($n > 0) {
                $val++; //se incrementa el valor una unidad
            } else {
                $bucle = false; // es porque encontró un espacio , se bucle lo pasa a falso para salir del ciclo
                return $val;  //devuelve el id disponible
            }
        }
    }

}
?>
