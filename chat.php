<?php
  session_start();
  if (isset($_SESSION['id']) && $_SESSION['role'] != "") {
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
  <div data-spy="scroll" data-target="#cajaChat" class="main-content w-auto " id="cajaChat">
      <?php
        include 'views/chat.php';
      ?>
  </div> <!-- / .main-content -->

  <?php
    include 'resources/scripts.php';
  ?>
</body>
</html>
<?php
}else {
  echo '<script>history.back();</script>';
}
?>
