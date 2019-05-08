<?php
/**
 *
 */
class ModeloGenerico extends Crud {

  private $className;
  private $excluir = ["className","tabla","conexion","wheres","sql","excluir"];

  function __construct($tabla, $className, $propiedades = null) {
    parent::__construct($tabla);
    $this->className = $className;

    if (empty($propiedades)) {
      return;
    }

    foreach ($propiedades as $llave => $valor) {
      $this->{$llaves} = $valor;
    }
  }

  protected function obtenerAtributos() {
    $variables = get_class_vars($this->className); // OBTENEMOS LOS ATRIBUTOS EN UN ARREGLO
    $atributos = [];
    $max = count($variables);
    foreach ($variables as $llave => $valor) {
      if (!in_array($llave, $this->excluir)) {
        $atributos[] = $llave;
      }
    }
    return $atributos;
  }

  protected function parsear($obj = null) {
    try {
      $atributos = $this->obtenerAtributos();
      $objetoFinal = [];
      // OBTENEMOS EL OBJ DEL MODELO
      if ($obj == null) {
        foreach ($atributos as $indice => $llave) {
          if (isset($this->{$llave})) {
            $objetoFinal[$llave] = $this->{$llave};
          }
        }
        return $objetoFinal;
      }

      // CORREGIR EL OBJETO QUE RECIBIMOS CON LOS ATRIBUTOS DEL MODELO

      foreach ($atributos as $indice => $llave) {
        if (isset($obj[$llave])) {
          $objetoFinal[$llave] = $obj[$llave];
        }
      }

      return $objetoFinal;

    } catch (\Exception $e) {
      throw new \Exception("Error en ".$this->className.".parsear() => " . $e->getMessage());
    }

  }

  public function fill($obj) {
    try {
      $atributos = $this->obtenerAtributos();
      foreach ($atributos as $indice => $llave) {
        if (isset($obj[$llave])) {
          $this->{$llave} = $obj[$llave];
        }
      }
    } catch (\Exception $e) {
      throw new \Exception("Error en ".$this->className.".fill() => " . $e->getMessage());
    }

  }

  public function insert($obj = null) {
    $obj = $this->parsear($obj);
    return parent::insert($obj);
  }

  public function modificar($obj) {
    $obj = $this->parsear($obj);
    return parent::modificar($obj);
  }

  public function __get($nombreAtributo) {
    return $this->{$nombreAtributo};
  }

  public function __set($nombreAtributo, $valor) {
    $this->{$nombreAtributo} = $valor;
  }



}


 ?>
