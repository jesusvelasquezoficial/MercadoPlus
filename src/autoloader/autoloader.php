<?php
/**
 *
 */
class autoloader
{

  public static function registrar() {
    // VERIFICAMOS SI LA FUNCION SE A REGISTRADO ANTERIORMENTE PREGUNTANDO SI EXISTE LA FUNCION '__AUTOLOAD'
    if (function_exists('__autoload')) {
      // CONFIRMAMOS LA FUNCION Y SALIMOS.
      spl_autoload_register('__autoload');
      return;
    }
    // COMPARAMOS SI LA VERSION DE PHP ES MAYOR O IGUAL A LA V(5.3.0)
    if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
      // REGISTRAMOS NUESTRO PROPIO AUTOLOADER
      spl_autoload_register(array('autoloader', 'cargar'), true, true);
    }else{
      spl_autoload_register(array('autoloader', 'cargar'));
    }
  }

  public static function cargar($clase) {
    $nombreArchivo = $clase.'.php';
    $carpetas = require PATH_CONFIG.'autoloader.php';
    foreach ($carpetas as $carpeta) {
      if (self::buscarArchivo($carpeta,$nombreArchivo)) {
        return true;
      }
    }
    return false;
  }


  private static function buscarArchivo($carpeta, $nombreArchivo) {
    // scandir nos devuelve una lista de archivos que contiene esa carpeta.
    $archivos = scandir($carpeta);
    foreach ($archivos as $archivo) {
      $rutaArchivo = realpath($carpeta . DIRECTORY_SEPARATOR . $archivo);
      if (is_file($rutaArchivo)) {
        if ($nombreArchivo == $archivo) {
          require_once $rutaArchivo;
          return true;
        }
      }else if($archivo != '.' && $archivo != '..'){
        return self::buscarArchivo($rutaArchivo, $nombreArchivo);
      }
    }
    return false;
  }
}

?>
