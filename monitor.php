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
          <div class="col-12 col-lg-6 p-4 border border-light">
            <div class="chart">
              <canvas id="myChart"></canvas>
            </div>
            <div class="pt-3 text-center">
              <h4>Dolar Dicom</h4>
              <small>¡Por ahora!</small>
            </div>
          </div>
          <div class="col-12 col-lg-6 p-4 border border-light">
            <div class="chart">
              <canvas id="myChart2"></canvas>
            </div>
            <div class="pt-3 text-center">
              <h4>Euro Dicom</h4>
              <small>¡Por ahora!</small>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-4 p-4 border border-light">
            <div class="chart">
              <canvas id="myChart3"></canvas>
            </div>
            <div class="pt-3 text-center">
              <h4>Petroleo</h4>
            </div>
          </div>
          <div class="col-12 col-lg-4 p-4 border border-light">
            <div class="chart">
              <canvas id="myChart4"></canvas>
            </div>
            <div class="pt-3 text-center">
              <h4>Oro</h4>
            </div>
          </div>
          <div class="col-12 col-lg-4 p-4 border border-light">
            <div class="chart">
              <canvas id="myChart5"></canvas>
            </div>
            <div class="pt-3 text-center">
              <h4>Bitcoin</h4>
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
