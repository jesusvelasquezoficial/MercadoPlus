<?php
  session_start();
?>
<!doctype html>
<html lang="es">
<?php
include 'resources/head.php';
?>
<body data-spy="scroll" data-target="#principal" data-offset="0" style="position:relative;">
  <?php
    include 'componets/modals.php';
    include 'componets/navbar.php';
  ?>

  <!-- MAIN CONTENT
  ================================================== -->
  <div class="main-content w-auto " id="cajaContenido">
    <div>
      <?php
        include 'views/datosotc.php';
        include 'views/datosoficiales.php';
      ?>
    </div>
  </div> <!-- / .main-content -->

  <?php
    include 'resources/scripts.php';
  ?>
</body>
</html>
