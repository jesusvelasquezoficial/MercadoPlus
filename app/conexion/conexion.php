<?php

/**
 *
 */
class conexion {
  // VARIABLES PRIVADAS
  private $conexion;
  private $configuracion = [
    "driver" => "mysql",
    "host" => "localhost",
    "database" => "crudphp",
    "port" => "3306",
    "user" => "root",
    "password" => "",
    "charset" => "utf8mb4"
  ];

  public function __construct() {
    // code...
  }


  // CONECTAR
  public function conectar() {
    try {
      $CONTROLADOR = $this->configuracion['driver'];
      $SERVIDOR = $this->configuracion['host'];
      $BASE_DATOS = $this->configuracion['database'];
      $PUERTO = $this->configuracion['port'];
      $USUARIO = $this->configuracion['user'];
      $CLAVE = $this->configuracion['password'];
      $CODIFICACION = $this->configuracion['charset'];

      $url = "{$CONTROLADOR}:host={$SERVIDOR}:{$PUERTO};"
              . "dbname={$BASE_DATOS};charset={$CODIFICACION}";

      // CONEXION:
      $this->conexion = new PDO($url,$USUARIO,$CLAVE);
      return $this->conexion;
    } catch (\Exception $e) {
      // echo "NO SE PUDO CONECTAR";
      echo $e->getTraceAsString();
    }

  }

}
?>
