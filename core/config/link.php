<?php
  // $link = mysqli_connect('localhost', 'root', '10470800', 'mercadoplus');
  $link = mysqli_connect('localhost', 'root', '', 'mercadoplus');
  if (!$link) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
  }else {

    // OJO CON ESTO QUE AJAX DEVUELVE LA CADENA DE TEXTO EN RESPUESTA A CUALQUIER CONSULTA GENERADA EN EL CORE.
    // echo "<script>console.log('Conexión: ". mysqli_get_host_info($link)."');</script>";
  }

?>
