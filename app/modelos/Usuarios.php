<?php
  /**
   *
   */
  class Usuarios extends ModeloGenerico {
    protected $id;
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $email;
    protected $telefono;
    protected $fecha_registro;

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

    function getEdad() {
      return $this->edad;
    }

    function getEmail() {
      return $this->email;
    }

    function getTelefono() {
      return $this->telefono;
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

    function setEdad($edad) {
      $this->edad = $edad;
    }

    function setEmail($email) {
      $this->email = $email;
    }

    function setTelefono($telefono) {
      $this->telefono = $telefono;
    }

    function setFecha_registro($fecha_registro) {
      $this->fecha_registro = $fecha_registro;
    }



  }


?>
