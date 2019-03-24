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
  <div style="width:1080px /*!important;" class="main-content w-auto " >
    <div class="container-fluid">
      <div class="pt-6 h-auto" id="cms">
        <!-- Header -->
        <div class="header">
          <div class="header-body">
            <div class="row align-items-center">
              <div class="col">
                <!-- Pretitle -->
                <h4 class="header-pretitle">
                  Visión general
                </h4>
                <!-- Title -->
                <h2 class="header-title">
                  Ajustes
                </h2>
              </div>
            </div> <!-- / .row -->
            <div class="row align-items-center">
              <div class="col">
                <!-- Nav -->
                <ul class="nav nav-tabs nav-overflow header-tabs">
                  <li class="nav-item">
                    <a href="#!" class="nav-link active">
                      Datos Oficiales
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#!" class="nav-link">
                      Datos OTC
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Form Datos Oficiales -->
        <form class="mb-4">
          <div class="row">
            <!-- Fecha Datos Oficiales -->
            <div class="col-12 col-md-6">
              <div class="form-group">
                <!-- Label -->
                <label>
                  Fecha
                </label>
                <!-- Input -->
                <input type="text" class="form-control" placeholder="____/__/__/" data-toggle="flatpickr" id="fecha-DO"><br>
              </div>
            </div>
            <!-- Hora Datos Oficiales -->
            <div class="col-12 col-md-6">
              <div class="form-group">
                <!-- Label -->
                <label>
                  Hora
                </label>
                <!-- Input -->
                <div class="input-group input-group-merge mb-3">
                  <input type="text" class="form-control form-control-prepended" placeholder="" id="hora-DO">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span class="fe fe-clock"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Dolar Dicom Datos Oficiales -->
            <div class="col-12 col-md-6">
              <div class="form-group">
                <!-- Label -->
                <label class="mb-1">
                  Dolar Dicom
                </label>
                <!-- Input -->
                <div class="input-group input-group-merge mb-3">
                  <input type="text" class="form-control form-control-prepended" placeholder="" id="dolarDicom" data-mask="#.##0,00" data-mask-reverse="true">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span class="fe fe-bold">s.</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Euro Dicom Datos Oficiales -->
            <div class="col-12 col-md-6">
              <div class="form-group">
                <!-- Label -->
                <label class="mb-1">
                  Euro Dicom
                </label>
                <!-- Input -->
                <div class="input-group input-group-merge mb-3">
                  <input type="text" class="form-control form-control-prepended" placeholder="" id="euroDicom" data-mask="#.##0,00" data-mask-reverse="true">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span class="fe fe-bold">s.</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Euro Dolar Datos Oficiales -->
            <div class="col-12 col-md-6">
              <div class="form-group">
                <!-- Label -->
                <label class="mb-1">
                  Euro Dolar
                </label>
                <!-- Input -->
                <div class="input-group input-group-merge mb-3">
                  <input type="text" class="form-control form-control-prepended" placeholder="" id="euroDolar" data-mask="#.##0,00" data-mask-reverse="true">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span class="fe fe-bold">s.</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Bitcoin Datos Oficiales -->
            <div class="col-12 col-md-6">
              <div class="form-group">
                <!-- Label -->
                <label class="mb-1">
                  Bitcoin (BTC)
                </label>
                <!-- Input -->
                <div class="input-group input-group-merge mb-3">
                  <input type="text" class="form-control form-control-prepended" placeholder="" id="bitcoin" data-mask="#.##0,00" data-mask-reverse="true">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span class="fe fe-dollar-sign"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Petro (ST) -->
            <div class="col-12 col-md-6">
              <div class="form-group">
                <!-- Label -->
                <label class="mb-1">
                  Petro
                </label>
                <small class="form-text text-muted"> Salario minimo | Tramite </small>
                <!-- Input -->
                <div class="input-group input-group-merge mb-3">
                  <input type="text" class="form-control form-control-prepended" placeholder="" id="bitcoin" data-mask="#.##0,00" data-mask-reverse="true">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span class="fe fe-dollar-sign"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- / .row -->
        </form>

      </div>
    </div>
  </div> <!-- / .main-content -->

  <?php
    include 'scripts.php';
  ?>
</body>
</html>
