<?php
  session_start();
  if (isset($_SESSION['id']) && $_SESSION['role'] == "2") {
?>
<!doctype html>
<html lang="es">
<?php
  include 'resources/head.php';
?>
<body data-spy="scroll" data-target="#principal" data-offset="0" style="position:relative;">
  <?php
    include 'components/modals.php';
    include 'components/navbar.php';
  ?>

  <!-- MAIN CONTENT
  ================================================== -->
  <div class="main-content w-auto " id="cajaContenidoCMS">
    <div class="container-fluid">
      <div class="pt-6 h-auto" id="monitor">
        <!-- TAB HEADER DATOS -->
        <div class="header">
          <div class="header-body">
            <div class="row align-items-center">
              <div class="col">
                <!-- Pretitle -->
                <h3 class="header-pretitle mb-2">
                  PANEL DE CONTROL Y SEGUIMIENTO
                </h3>
                <!-- Title -->
                <h2 class="header-title">
                  DE LA ECONOMIA Y FINANZAS DE VENEZUELA
                </h2>
              </div>
            </div> <!-- / .row -->
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="chart">
              <canvas id="myChart" ></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
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
