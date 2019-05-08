<?php

/**
 *
 */
class controladorUsuarios {

  public function __construct() {

  }

  public function insertarUsuario($usuario) {
    $usuarioModel = new Usuarios();
    $id = $usuarioModel->insert($usuario);
    $v = ($id > 0);
    $respuesta = new respuesta($v ? EMensajes::INSERCION_EXITOSA : EMensajes::INSERCION_ERROR);
    $respuesta->setDatos($id);
    return $respuesta;
  }

  public function listarUsuarios() {
    $usuarioModel = new Usuarios();
    $lista = $usuarioModel->get();
    $v = (count($lista) > 0);
    $respuesta = new respuesta($v ? EMensajes::CONSULTA_EXITOSA : EMensajes::CONSULTA_ERROR);
    $respuesta->setDatos($lista);
    return $respuesta;
  }

  public function actualizarUsuario($usuario) {
    $usuarioModel = new Usuarios();
    $actualizados = $usuarioModel->where("id", "=", $usuario->idUsuario)->modificar($usuario);
    $v = ($actualizados > 0);
    $respuesta = new respuesta($v ? EMensajes::ACTUALIZACION_EXITOSA : EMensajes::ACTUALIZACION_ERROR);
    $respuesta->setDatos($actualizados);
    return $respuesta;
  }

  public function eliminarUsuario($idUsuario) {
    $usuarioModel = new Usuarios();
    $eliminados = $usuarioModel->where("id", "=", $idUsuario)->borrar();
    $v = ($eliminados > 0);
    $respuesta = new respuesta($v ? EMensajes::ELIMINACION_EXITOSA : EMensajes::ELIMINACION_ERROR);
    $respuesta->setDatos($eliminados);
    return $respuesta;

  }

  public function buscarUsuarioPorId($idUsuario) {
    $usuarioModel = new Usuarios();
    $usuario = $usuarioModel->where("id", "=", $idUsuario)->first(); //asi solo nos da 1 solo obj
    $v = ($usuario != null);
    $respuesta = new respuesta($v ? EMensajes::CONSULTA_EXITOSA : EMensajes::CONSULTA_ERROR);
    $respuesta->setDatos($usuario);
    return $respuesta;
  }

}

 ?>
