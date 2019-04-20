<?php
  session_start();
?>
<!doctype html>
<html lang="es">
<?php
include 'resources/head.php';
?>
<body data-offset="0" style="position:relative;">
  <?php
    include 'components/modals.php';
    include 'components/navbar.php';
  ?>

  <!-- MAIN CONTENT
  ================================================== -->
  <div data-spy="scroll" data-target="#principal" class="main-content w-auto " id="cajaContenido">
    <div>
      <?php
        include 'views/chat.php';
      ?>
    </div>
  </div> <!-- / .main-content -->

  <?php
    include 'resources/scripts.php';
  ?>
</body>
</html>
