<?php
  // $link = mysqli_connect('localhost', 'root', '10470800', 'mercadoplus');
  $link = mysqli_connect('localhost', 'root', '', 'mercadoplus');
  if (!$link) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
echo "<script>console.log('Conexión: ". mysqli_get_host_info($link)."');</script>";

?>
