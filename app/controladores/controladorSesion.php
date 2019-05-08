<?php
/**
 *
 */
class controladorSesion {

  protected $email;
  protected $pass;

  public function __construct($e,$p) {
    $this->email = $e;
    $this->pass = $p;
  }

  public function entrar() {
    // Crearmos un controladorUsuarios
    $controladorUsuario = new controladorUsuarios();
    // Verificamos si el Email coincide con un Usuario en la DB.
    $usuario = $controladorUsuario->buscarUsuarioPorEmail($this->email);
    $v = (count($usuario) > 0);
    // Si llega un usuario
    if ($v) {
      // Verificamos si el Password coincide con el Pass del Usuario de la DB.
      if ($usuario->datos->password == md5($this->pass)){
        // almacenamos en la SESSION los datos del USUARIO.
        $_SESSION['id'] = $usuario->datos->id;
        $_SESSION['nombre'] = $usuario->datos->nombre;
        $_SESSION['apellido'] = $usuario->datos->apellido;
        $_SESSION['email'] = $usuario->datos->email;
        $_SESSION['role'] = $usuario->datos->role;
        $_SESSION['msj'] = "Bienvenido ".$_SESSION['nombre']." ".$_SESSION['apellido'];

        $respuesta = new respuesta(1 ? EMensajes::CONSULTA_EXITOSA : EMensajes::CONSULTA_ERROR);
        $respuesta->setDatos($_SESSION['msj']);
        return $respuesta;

      }else{
        $respuesta = new respuesta(0 ? EMensajes::CONSULTA_EXITOSA : EMensajes::CONSULTA_ERROR);
        $respuesta->setDatos("Password Incorrecto.");
        return $respuesta;
      }
    }else{
      $respuesta = new respuesta(0 ? EMensajes::CONSULTA_EXITOSA : EMensajes::CONSULTA_ERROR);
      $respuesta->setDatos("Email Incorrecto.");
      return $respuesta;
    }
  }

  public function salir() {
    session_unset();
    session_destroy();
  }

  // GETS

  function getEmail() {
    return $this->email;
  }
  function getpass() {
    return $this->pass;
  }

  // SETS

  function setEmail($email) {
    $this->email = $email;
  }
  function setpass($pass) {
    $this->pass = $pass;
  }

}

?>
