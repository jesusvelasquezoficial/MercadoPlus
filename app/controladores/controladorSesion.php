<?php
/**
 *
 */
class controladorSesion {

  protected $idSesion;
  protected $nombre;
  protected $apellido;
  protected $email;
  protected $pass;
  protected $role;
  protected $msj;

  public function __construct() {

  }

  public function entrar($credencial) {
      $result = $this->verificar($credencial);
      if ($result->codigo > 0) {
        session_start();
        $_SESSION['id'] = $result->datos->id;
        $_SESSION['nombre'] = $result->datos->nombre;
        $_SESSION['apellido'] = $result->datos->apellido;
        $_SESSION['email'] = $result->datos->email;
        $_SESSION['password'] = $result->datos->password;
        $_SESSION['role'] = $result->datos->role;
        $_SESSION['msj'] = "Bienvenido ".$this->nombre." ".$this->apellido;
        header('location:../index.php');
        return $result;
      }
      header('location:../login.php');
  }

  public function salir() {
    session_unset();
    session_destroy();
  }

  public function verificar($credencial) {
    // Verificamos si Email coincide con el de la DB.
    $result = (new controladorUsuarios())->buscarUsuarioPorEmail($credencial['email']);
    // Creamos una Bandera con el codigo del Result.
    $flag = ($result->codigo > 0);
    if ($flag) {
      // Verificamos si Password coincide con el de la DB.
      if (md5($credencial['password']) == $result->datos->password) {

        $this->id = $result->datos->id;
        $this->nombre = $result->datos->nombre;
        $this->apellido = $result->datos->apellido;
        $this->email = $result->datos->email;
        $this->password = $result->datos->password;
        $this->role = $result->datos->role;
        // $_SESSION['msj'] = "Bienvenido ".$_SESSION['nombre']." ".$_SESSION['apellido'];
        return $result;

        // $result->setMensaje($_SESSION['msj']);
        // $result->setDatos(null);
        // $res = new respuesta(1 ? EMensajes::CONSULTA_EXITOSA : EMensajes::CONSULTA_ERROR);
        // $res->setMensaje($_SESSION['msj']);
        // return $res;
      }
        $result->setCodigo(-1);
        $result->setMensaje("Password Incorrecto");
        $result->setDatos(null);
        return $result;
    }
      $result->setMensaje("Email Incorrecto");
      return $result;
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
