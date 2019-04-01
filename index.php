<?php
  session_start();
?>
<!doctype html>
<html lang="es">
<?php
  include 'head.php';
?>
<body data-spy="scroll" data-target="#principal" data-offset="0" style="position:relative;">
  <?php
    include 'modals.php';
    include 'navbar.php';
  ?>

  <!-- MAIN CONTENT
  ================================================== -->
  <div class="main-content w-auto " id="cajaContenido">
    <div>
      <?php
        include 'view2.php';
        include 'view1.php';
      ?>
      <div class="pt-6"></div>
    </div>
  </div> <!-- / .main-content -->

  <?php
    include 'scripts.php';
  ?>
</body>
</html>
