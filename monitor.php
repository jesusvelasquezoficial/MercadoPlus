<?php
  session_start();
  if (isset($_SESSION['id']) && $_SESSION['role'] == "2") {
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Titulo -->
    <title>Mercado Plus - Monitor</title>
    <!-- Descripcion del sitio -->
    <meta name="description" content="Monitor de datos para el analisis de datos de Mercado Plus.">
    <?php include 'resources/css.php'; ?>
    <!-- Inputs calendario -->
    <link rel="stylesheet" href="assets/libs/flatpickr/dist/flatpickr.min.css">
    <!-- Temas -->
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">
  </head>
  <body data-offset="0" style="position:relative;">
    <?php
      include 'components/modals.php';
      include 'components/navbar.php';
    ?>
    <!-- contenido
    ================================================== -->
    <div data-spy="scroll" data-target="#principal" class="main-content w-auto " id="monitor">
      <div class="container-fluid">
        <div class="pt-6 h-auto" id="monitor">
          <!-- tab header datos -->
          <div class="header">
            <div class="header-body">
              <div class="row align-items-center">
                <div class="col">
                  <!-- Pretitle -->
                  <h3 class="header-pretitle mb-2">
                    DASHBOARD
                  </h3>
                  <!-- Title -->
                  <h2 class="header-title">
                    PHOENIX PLUS INTELLIGENCE
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
                <h4>DOLAR OFICIAL VS DOLAR OTC</h4>
              </div>
            </div>
            <div class="col-12 col-lg-6 p-4 border border-light">
              <div class="chart">
                <canvas id="myChart2"></canvas>
              </div>
              <div class="pt-3 text-center">
                <h4>EURO OFICIAL VS EURO OTC</h4>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-4 p-4 border border-light">
              <div class="chart">
                <canvas id="myChart3"></canvas>
              </div>
              <div class="pt-3 text-center">
                <h4>PETROLEO</h4>
              </div>
            </div>
            <div class="col-12 col-lg-4 p-4 border border-light">
              <div class="chart">
                <canvas id="myChart4"></canvas>
              </div>
              <div class="pt-3 text-center">
                <h4>ORO</h4>
              </div>
            </div>
            <div class="col-12 col-lg-4 p-4 border border-light">
              <div class="chart">
                <canvas id="myChart5"></canvas>
              </div>
              <div class="pt-3 text-center">
                <h4>BITCOIN</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- / content -->
    <!-- ================================================== -->
    <?php include 'resources/scripts.php'; ?>
    <!-- inputs calendario -->
    <script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <!-- listar datos -->
    <script src="assets/libs/list.js/dist/list.min.js"></script>
    <!-- mascara de datos -->
    <script src="assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <!-- graficos -->
    <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <!-- extension graficos -->
    <script src="assets/libs/chart.js/Chart.extension.min.js"></script>
    <!-- tema -->
    <script src="assets/js/theme.min.js"></script>
    <!-- monitor -->
    <script src="assets/js//monitor.js"></script>
    <!-- ================================================== -->
  </body>
</html>
<?php
}else {
  echo '<script>history.back();</script>';
}
?>
