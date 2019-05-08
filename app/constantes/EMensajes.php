<?php

/**
 *
 */
class EMensajes
{
  const CORRECTO = "CORRECTO";
  const ERROR = "ERROR";
  const CONSULTA_EXITOSA = "CONSULTA_EXITOSA";
  const CONSULTA_ERROR = "CONSULTA_ERROR";
  const INSERCION_EXITOSA = "INSERCION_EXITOSA";
  const INSERCION_ERROR = "INSERCION_ERROR";
  const ACTUALIZACION_EXITOSA = "ACTUALIZACION_EXITOSA";
  const ACTUALIZACION_ERROR = "ACTUALIZACION_ERROR";
  const ELIMINACION_EXITOSA = "ELIMINACION_EXITOSA";
  const ELIMINACION_ERROR = "ELIMINACION_ERROR";

  public static function getMensaje($codigo) {
    switch ($codigo) {
      // SUCCESS
      case EMensajes::CORRECTO:
        return new respuesta(1, "Se ha realizado la operacion de manera correcta.");
      case EMensajes::CONSULTA_EXITOSA:
        return new respuesta(1, "Se ha consultado el registro con exito.");
      case EMensajes::INSERCION_EXITOSA:
        return new respuesta(1, "Se ha insertado el registro con exito.");
      case EMensajes::ACTUALIZACION_EXITOSA:
        return new respuesta(1, "Se ha actualizado el registro con exito.");
      case EMensajes::ELIMINACION_EXITOSA:
        return new respuesta(1, "Se ha eliminado el registro con exito.");
        // ERROR
      case EMensajes::ERROR:
        return new respuesta(-1, "Se ha producido un error al realizar la operacion.");
      case EMensajes::CONSULTA_ERROR:
        return new respuesta(-1, "Se ha producido un error al consultar el registro.");
      case EMensajes::INSERCION_ERROR:
        return new respuesta(-1, "Se ha producido un error al insertar el registro.");
      case EMensajes::ACTUALIZACION_ERROR:
        return new respuesta(-1, "Se ha producido un error al actualizar el registro.");
      case EMensajes::ELIMINACION_ERROR:
        return new respuesta(-1, "Se ha producido un error al eliminar el registro.");
    }
  }
}


?>
