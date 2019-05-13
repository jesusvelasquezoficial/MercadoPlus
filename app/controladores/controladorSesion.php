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

  public function __construct() {

  }

  public function entrar($credencial) {
    return $this->verificar($credencial);
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

        session_start();
        $_SESSION['id'] = $result->datos->id;
        $_SESSION['nombre'] = $result->datos->nombre;
        $_SESSION['apellido'] = $result->datos->apellido;
        $_SESSION['email'] = $result->datos->email;
        $_SESSION['role'] = $result->datos->role;
        $_SESSION['msj'] = "Bienvenido ".$_SESSION['nombre']." ".$_SESSION['apellido'];

        $this->idSesion = $result->datos->id;
        $this->nombre = $result->datos->nombre;
        $this->apellido = $result->datos->apellido;
        $this->email = $result->datos->email;
        $this->password = $result->datos->password;
        $this->role = $result->datos->role;

        $result->setMensaje("Bienvenido ".$this->nombre." ".$this->apellido);
        $result->setDatos(null);

        return $result;

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

  function getId() {
    return $this->idSesion;
  }
  function getNombre() {
    return $this->nombre;
  }
  function getApellido() {
    return $this->apellido;
  }
  function getEmail() {
    return $this->email;
  }
  function getPass() {
    return $this->pass;
  }
  function getRole() {
    return $this->role;
  }

  // SETS

  function setId($idSesion) {
    $this->idSesion = $idSesion;
  }
  function setNombre($nombre) {
    $this->nombre = $nombre;
  }
  function setApellido($apellido) {
    $this->apellido = $apellido;
  }
  function setEmail($email) {
    $this->email = $email;
  }
  function setPass($pass) {
    $this->pass = $pass;
  }
  function setRole($role) {
    $this->role = $role;
  }

}

?>
