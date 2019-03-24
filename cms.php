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
                <ul class="nav nav-tabs nav-overflow header-tabs" id="tabDatos">
                  <li class="nav-item">
                    <a href="#datosOficiales" class="nav-link active" id="datosOficiales-tab" data-toggle="tab" role="tab" aria-controls="datosOficiales" aria-selected="true">
                      Datos Oficiales
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#datosOTC" class="nav-link" id="datosOTC-tab" data-toggle="tab" role="tab" aria-controls="datosOTC" aria-selected="false">
                      Datos OTC
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-content">
          <div class="tab-pane fade show  active" id="datosOficiales" role="tabpanel" aria-labelledby="datosOficiales-tab">
            <!-- Form Datos Oficiales -->
            <form class="mb-4" action="" method="post">
              <div class="row d-flex justify-content-center">
                <!-- Fecha Datos Oficiales -->
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <!-- Label -->
                    <label>
                      Fecha
                    </label>
                    <!-- Input -->
                    <div class="input-group input-group-merge mb-3">
                      <input type="text" class="form-control form-control-prepended" placeholder="____/__/__/" data-toggle="flatpickr" id="fecha-DO"><br>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <span class="fe fe-calendar"></span>
                        </div>
                      </div>
                    </div>
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
                <!-- Petro (S y T) -->
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      Petro
                    </label>
                    <!-- Sub label -->
                    <small class="form-text text-muted"> Salario minimo | Tramite </small>
                    <!-- Input -->
                    <div class="input-group input-group-merge mb-3">
                      <input type="text" class="form-control form-control-prepended" placeholder="" id="petro1" data-mask="#.##0,00" data-mask-reverse="true">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <span class="fe fe-bold">s.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Petro (PA y C) -->
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      Petro
                    </label>
                    <!-- Sub label -->
                    <small class="form-text text-muted"> Plan de Ahorro | Crypto </small>
                    <!-- Input -->
                    <div class="input-group input-group-merge mb-3">
                      <input type="text" class="form-control form-control-prepended" placeholder="" id="petro2" data-mask="#.##0,00" data-mask-reverse="true">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <span class="fe fe-bold">s.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Petroleo -->
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      Petroleo
                    </label>
                    <div class="row">
                      <div class="col-6">
                        <small class="form-text text-muted">WTI</small>
                      </div>
                      <div class="col-6">
                        <small class="form-text text-muted">BRENT</small>
                      </div>
                    </div>
                    <div class="row">
                      <!-- Input -->
                      <div class="input-group input-group-merge mb-3 col-6">
                        <input type="text" class="form-control form-control-prepended" placeholder="" id="wti" data-mask="#.##0,00" data-mask-reverse="true">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- Input -->
                      <div class="input-group input-group-merge mb-3 col-6">
                        <input type="text" class="form-control form-control-prepended" placeholder="" id="brent" data-mask="#.##0,00" data-mask-reverse="true">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Oro -->
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      Oro
                    </label>
                    <div class="row">
                      <div class="col-6">
                        <small class="form-text text-muted">COMPRA</small>
                      </div>
                      <div class="col-6">
                        <small class="form-text text-muted">VENTA</small>
                      </div>
                    </div>
                    <div class="row">
                      <!-- Input -->
                      <div class="input-group input-group-merge mb-3 col-6">
                        <input type="text" class="form-control form-control-prepended" placeholder="" id="oroBuy" data-mask="#.##0,00" data-mask-reverse="true">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- Input -->
                      <div class="input-group input-group-merge mb-3 col-6">
                        <input type="text" class="form-control form-control-prepended" placeholder="" id="oroSell" data-mask="#.##0,00" data-mask-reverse="true">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Botones -->
                <div class="col-12 d-flex justify-content-end">
                  <button type="reset" class="btn btn-outline-white justify-content-end mr-4">Limpiar</button>
                  <button type="submit" class="btn btn-outline-success justify-content-end">Guardar</button>
                </div>
              </div> <!-- / .row -->
            </form>
          </div>
          <div class="tab-pane fade" id="datosOTC" role="tabpanel" aria-labelledby="datosOTC-tab">
            <h1>Hola mundo XD</h1>
          </div>
        </div>



      </div>
    </div>
  </div> <!-- / .main-content -->

  <?php
    include 'scripts.php';
  ?>
</body>
</html>
