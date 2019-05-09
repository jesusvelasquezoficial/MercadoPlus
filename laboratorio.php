<?php
    session_start();

    require_once './src/roots.php';
    require_once PATH_SRC.'autoloader/autoloader.php';
    autoloader::registrar();

    $e = 'fagredameza@gmail.com';
    $p = 'admin';

    $sesion = new controladorSesion($e,$p);
    $obj = $sesion->entrar()->json();
    if (count($obj) > 0) {
      echo $obj;
    }
 ?>
