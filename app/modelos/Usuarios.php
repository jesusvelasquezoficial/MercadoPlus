<?php
  /**
   *
   */
  class Usuarios extends ModeloGenerico {
    protected $id;
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $password;
    protected $role;
    // protected $fecha_registro;

    public function __construct($propiedades = null) {
      parent::__construct("usuarios",Usuarios::class, $propiedades);
    }

    // GETS

    function getId() {
      return $this->id;
    }

    function getNombre() {
      return $this->nombre;
    }

    function getApellido() {
      return $this->apellido;
    }

    function getPassword() {
      return $this->password;
    }

    function getEmail() {
      return $this->email;
    }

    function getRole() {
      return $this->role;
    }

    function getFecha_registro() {
      return $this->fecha_registro;
    }

    // SETS

    function setId($id) {
      $this->id = $id;
    }

    function setNombre($nombre) {
      $this->nombre = $nombre;
    }

    function setApellido($apellido) {
      $this->apellido = $apellido;
    }

    function setPassword($password) {
      $this->password = $password;
    }

    function setEmail($email) {
      $this->email = $email;
    }

    function setRole($role) {
      $this->role = $role;
    }

    function setFecha_registro($fecha_registro) {
      $this->fecha_registro = $fecha_registro;
    }



  }


?>
