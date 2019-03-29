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
                <!-- NAV DATOS -->
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

        <!-- CONTENIDO TAB DATOS -->
        <div class="tab-content">

          <!-- TAB DATOS OFICIALES -->
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
                      <input type="text" class="form-control form-control-prepended" placeholder="00:00 AM" id="hora-DO" data-mask="##:## AA" data-mask-reverse="true">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <span class="fe fe-clock"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Dolar DICOM Datos Oficiales -->
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      Dolar DICOM
                    </label>
                    <!-- Input -->
                    <div class="input-group input-group-merge mb-3">
                      <input type="text" class="form-control form-control-prepended" placeholder="" id="dolarDICOM" data-mask="#,###.00" data-mask-reverse="true" onchange="valorEuroDolar(this,euroDICOM,euroDolar);petroPlanAhorroYCrypto(this,petro,petro2);">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <span class="fe fe-bold">s.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Euro DICOM Datos Oficiales -->
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      Euro DICOM
                    </label>
                    <!-- Input -->
                    <div class="input-group input-group-merge mb-3">
                      <input type="text" class="form-control form-control-prepended" placeholder="" id="euroDICOM" data-mask="#,###.00" data-mask-reverse="true" onchange="valorEuroDolar(dolarDICOM,this,euroDolar);">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <span class="fe fe-bold">s.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Valor Euro Dolar Datos Oficiales -->
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <div class="d-none d-md-block" style="margin-bottom: .5rem !important;height:1.2rem;"></div>
                    <!-- Label -->
                    <label class="mb-1">
                      Valor Euro Dolar
                    </label>
                    <!-- Input -->
                    <div class="input-group input-group-merge mb-3">
                      <input type="text" class="form-control form-control-prepended" placeholder="" id="euroDolar" data-mask="#,###.00" data-mask-reverse="true" disabled>
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
                    <div class="row">
                      <div class="col-4">
                        <small class="form-text text-muted">COMPRA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">VENTA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">PROMEDIO</small>
                      </div>
                    </div>
                    <div class="row">
                      <!-- Input -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-success" placeholder="" id="bitcoinBuy" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(this,bitcoinSell,bitcoinPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text  border-success">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- Input -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-danger" placeholder="" id="bitcoinSell" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(bitcoinBuy,this,bitcoinPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-danger">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- Input -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended" style="border-color:orange;" placeholder="" id="bitcoinPromedio" data-mask="#,###.00" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="border-color:orange;">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Valor Petro -->
                <div class="col-12 col-md-4">
                  <div class="form-group">
                    <div class="d-none d-md-block" style="margin-bottom: .5rem !important;height:1.2rem;"></div>
                    <!-- Label -->
                    <label class="mb-1">
                      Valor Petro
                    </label>
                    <!-- Input -->
                    <div class="input-group input-group-merge mb-3">
                      <input type="text" class="form-control form-control-prepended" placeholder="" id="petro" data-mask="#,###.00" data-mask-reverse="true" onchange="petroPlanAhorroYCrypto(dolarDICOM,this,petro2);">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <span class="fe fe-dollar-sign"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Petro (S y T) -->
                <div class="col-12 col-md-4">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      Petro
                    </label>
                    <!-- Sub label -->
                    <small class="form-text text-muted"> Salario minimo | Tramite </small>
                    <!-- Input -->
                    <div class="input-group input-group-merge mb-3">
                      <input type="text" class="form-control form-control-prepended" placeholder="" id="petro1" data-mask="#,###.00" data-mask-reverse="true">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <span class="fe fe-bold">s.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Petro (PdA y C) -->
                <div class="col-12 col-md-4">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      Petro
                    </label>
                    <!-- Sub label -->
                    <small class="form-text text-muted"> Plan de Ahorro | Crypto </small>
                    <!-- Input -->
                    <div class="input-group input-group-merge mb-3">
                      <input type="text" class="form-control form-control-prepended" placeholder="" id="petro2" data-mask="###,###.00" data-mask-reverse="true" disabled>
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
                      <div class="col-4">
                        <small class="form-text text-muted">WTI</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">BRENT</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">VALOR</small>
                      </div>
                    </div>
                    <div class="row">
                      <!-- Input -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-success" placeholder="" id="wti" data-mask="#,###.00" data-mask-reverse="true" onchange="valorPetroleo(this,brent,petroleo);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-success">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- Input -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-danger" placeholder="" id="brent" data-mask="#,###.00" data-mask-reverse="true" onchange="valorPetroleo(wti,this,petroleo);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-danger">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- Input -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended" style="border-color:orange;" placeholder="" id="petroleo" data-mask="#,###.##" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="border-color:orange;">
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
                      <div class="col-4">
                        <small class="form-text text-muted">COMPRA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">VENTA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">PROMEDIO</small>
                      </div>
                    </div>
                    <div class="row">
                      <!-- Input -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-success" placeholder="" id="oroBuy" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(this,oroSell,oroPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-success">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- Input -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-danger" placeholder="" id="oroSell" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(oroBuy,this,oroPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-danger">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- Input -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended" style="border-color:orange;" placeholder="" id="oroPromedio" data-mask="#,###.00" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="border-color:orange;">
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

          <!-- TAB DATOS OTC -->
          <div class="tab-pane fade" id="datosOTC" role="tabpanel" aria-labelledby="datosOTC-tab">
            <!-- Form Datos Oficiales -->
            <form class="mb-4" action="" method="post">
              <div class="row d-flex justify-content-center">
                <!-- Fecha Datos OTC -->
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <!-- Label -->
                    <label>
                      Fecha
                    </label>
                    <!-- Input -->
                    <div class="input-group input-group-merge mb-3">
                      <input type="text" class="form-control form-control-prepended" data-toggle="flatpickr" id="fecha-OTC"><br>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <span class="fe fe-calendar"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Hora Datos OTC -->
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <!-- Label -->
                    <label>
                      Hora
                    </label>
                    <!-- Input -->
                    <div class="input-group input-group-merge mb-3">
                      <input type="text" class="form-control form-control-prepended" placeholder="00:00 AM" id="hora-OTC" data-mask="##:## AA" data-mask-reverse="true">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <span class="fe fe-clock"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Dolar Today Datos OTC -->
                <div class="col-12">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      Dolar Today
                    </label>
                    <div class="row">
                      <div class="col-4">
                        <small class="form-text text-muted">COMPRA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">VENTA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">PROMEDIO</small>
                      </div>
                    </div>
                    <div class="row">
                      <!-- COMPRA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-success" placeholder="" id="dolartodayBuy" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(this,dolartodaySell,dolartodayPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-success">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- VENTA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-danger" placeholder="" id="dolartodaySell" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(dolartodayBuy,this,dolartodayPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-danger">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- PROMEDIO -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended" style="border-color:orange;" onchange="promedioTotalOTC(this);" id="dolartodayPromedio" data-mask="#,###.00" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="border-color:orange;">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Dolar Today (BTC) Datos OTC -->
                <div class="col-12">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      Dolar Today (BTC)
                    </label>
                    <div class="row">
                      <div class="col-4">
                        <small class="form-text text-muted">COMPRA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">VENTA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">PROMEDIO</small>
                      </div>
                    </div>
                    <div class="row">
                      <!-- COMPRA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-success" placeholder="" id="dolartodayBTCBuy" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(this,dolartodayBTCSell,dolartodayBTCPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-success">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- VENTA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-danger" placeholder="" id="dolartodayBTCSell" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(dolartodayBTCBuy,this,dolartodayBTCPromedio)">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-danger">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- PROMEDIO -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended" style="border-color:orange;" onchange="promedioTotalOTC(this);" id="dolartodayBTCPromedio" data-mask="#,###.00" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="border-color:orange;">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- TheAirTM Datos OTC -->
                <div class="col-12">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      TheAirTM
                    </label>
                    <div class="row">
                      <div class="col-4">
                        <small class="form-text text-muted">COMPRA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">VENTA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">PROMEDIO</small>
                      </div>
                    </div>
                    <div class="row">
                      <!-- COMPRA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-success" placeholder="" id="airTMBuy" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(this,airTMSell,airTMPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-success">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- VENTA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-danger" placeholder="" id="airTMSell" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(airTMBuy,this,airTMPromedio)">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-danger">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- PROMEDIO -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended" style="border-color:orange;" placeholder="" id="airTMPromedio" data-mask="#,###.00" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="border-color:orange;">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- DolarTRUE_ Datos OTC -->
                <div class="col-12">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      DolarTrue_
                    </label>
                    <div class="row">
                      <div class="col-4">
                        <small class="form-text text-muted">COMPRA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">VENTA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">PROMEDIO</small>
                      </div>
                    </div>
                    <div class="row">
                      <!-- COMPRA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-success" placeholder="" id="dolarTrueBuy" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(this,dolarTrueSell,dolarTruePromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-success">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- VENTA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-danger" placeholder="" id="dolarTrueSell" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(dolarTrueBuy,this,dolarTruePromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-danger">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- PROMEDIO -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended" style="border-color:orange;" placeholder="" id="dolarTruePromedio" data-mask="#,###.00" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="border-color:orange;">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- MonitorDolarVZLA Datos OTC -->
                <div class="col-12">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      MonitorDolarVZLA
                    </label>
                    <div class="row">
                      <div class="col-4">
                        <small class="form-text text-muted">COMPRA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">VENTA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">PROMEDIO</small>
                      </div>
                    </div>
                    <div class="row">
                      <!-- COMPRA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-success" placeholder="" id="monitorDolarVZLABuy" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(this,monitorDolarVZLASell,monitorDolarVZLAPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-success">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- VENTA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-danger" placeholder="" id="monitorDolarVZLASell" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(monitorDolarVZLABuy,this,monitorDolarVZLAPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-danger">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- PROMEDIO -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended" style="border-color:orange;" placeholder="" id="monitorDolarVZLAPromedio" data-mask="#,###.00" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="border-color:orange;">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- MKambio Datos OTC -->
                <div class="col-12">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      MKambio
                    </label>
                    <div class="row">
                      <div class="col-4">
                        <small class="form-text text-muted">COMPRA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">VENTA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">PROMEDIO</small>
                      </div>
                    </div>
                    <div class="row">
                      <!-- COMPRA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-success" placeholder="" id="MKambioBuy" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(this,MKambioSell,MKambioPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-success">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- VENTA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-danger" placeholder="" id="MKambioSell" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(MKambioBuy,this,MKambioPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-danger">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- PROMEDIO -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended" style="border-color:orange;" placeholder="" id="MKambioPromedio" data-mask="#,###.00" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="border-color:orange;">
                            <span class="fe fe-bold">s.</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Dolar_Gold Datos OTC -->
                <div class="col-12">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      Dolar_Gold
                    </label>
                    <div class="row">
                      <div class="col-4">
                        <small class="form-text text-muted">COMPRA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">VENTA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">PROMEDIO</small>
                      </div>
                    </div>
                    <div class="row">
                      <!-- COMPRA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-success" placeholder="" id="dolarGoldBuy" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(this,dolarGoldSell,dolarGoldPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-success">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- VENTA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-danger" placeholder="" id="dolarGoldSell" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(dolarGoldBuy,this,dolarGoldPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-danger">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- PROMEDIO -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended" style="border-color:orange;" placeholder="" id="dolarGoldPromedio" data-mask="#,###.00" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="border-color:orange;">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Dolar_FT Datos OTC -->
                <div class="col-12">
                  <div class="form-group">
                    <!-- Label -->
                    <label class="mb-1">
                      Dolar_FT
                    </label>

                    <div class="row">
                      <div class="col-4">
                        <small class="form-text text-muted">COMPRA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">VENTA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">PROMEDIO</small>
                      </div>
                    </div>
                    <div class="row">
                      <!-- COMPRA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-success" placeholder="" id="dolarFTBuy" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(this,dolarFTSell,dolarFTPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-success">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- VENTA -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended border-danger" placeholder="" id="dolarFTSell" data-mask="#,###.00" data-mask-reverse="true" onchange="promediar(dolarFTBuy,this,dolarFTPromedio);">
                        <div class="input-group-prepend">
                          <div class="input-group-text border-danger">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- PROMEDIO -->
                      <div class="input-group input-group-merge mb-3 col-4">
                        <input type="text" class="form-control form-control-prepended" style="border-color:orange;" placeholder="" id="dolarFTPromedio" data-mask="#,###.00" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="border-color:orange;">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- DOLAR/EURO/PROMEDIO TOTAL -->
                <div class="col-12">
                  <div class="form-group">
                    <!-- Label -->
                    <div class="row justify-content-end">
                      <div class="col-4">
                        <label class="mb-1">
                          DOLAR
                        </label>
                      </div>
                      <div class="col-4">
                        <label class="mb-1">
                          EURO
                        </label>
                      </div>
                      <div class="col-4">
                        <label class="mb-1">
                          PROMEDIO
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2">
                        <small class="form-text text-muted">COMPRA</small>
                      </div>
                      <div class="col-2">
                        <small class="form-text text-muted">VENTA</small>
                      </div>
                      <div class="col-2">
                        <small class="form-text text-muted">COMPRA</small>
                      </div>
                      <div class="col-2">
                        <small class="form-text text-muted">VENTA</small>
                      </div>
                      <div class="col-4">
                        <small class="form-text text-muted">TOTAL</small>
                      </div>
                    </div>
                    <div class="row justify-content-end">
                      <!-- DOLAR COMPRA -->
                      <div class="input-group input-group-merge mb-3 col-2 text-white ">
                        <input type="text" class="form-control form-control-prepended text-white" style="border-color:Limegreen;background-color:rgba(40,167,69,.7);" placeholder="" id="dolarC" data-mask="#,###.##" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text text-white" style="border-color:Limegreen;background-color:rgba(40,167,69,.7);">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- DOLAR VENTA -->
                      <div class="input-group input-group-merge mb-3 col-2 text-white ">
                        <input type="text" class="form-control form-control-prepended text-white" style="border-color:red;background-color:rgba(220,53,69,.7);" placeholder="" id="dolarV" data-mask="#,###.##" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text text-white" style="border-color:red;background-color:rgba(220,53,69,.7);">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- EURO COMPRA -->
                      <div class="input-group input-group-merge mb-3 col-2 text-white ">
                        <input type="text" class="form-control form-control-prepended text-white" style="border-color:Limegreen;background-color:rgba(40,167,69,.7);" placeholder="" id="euroC" data-mask="#,###.##" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text text-white" style="border-color:Limegreen;background-color:rgba(40,167,69,.7);">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- EURO VENTA -->
                      <div class="input-group input-group-merge mb-3 col-2 text-white ">
                        <input type="text" class="form-control form-control-prepended text-white" style="border-color:red;background-color:rgba(220,53,69,.7);" placeholder="" id="euroV" data-mask="#,###.##" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text text-white" style="border-color:red;background-color:rgba(220,53,69,.7);">
                            <span class="fe fe-dollar-sign"></span>
                          </div>
                        </div>
                      </div>
                      <!-- PROMEDIO -->
                      <div class="input-group input-group-merge mb-3 col-4 text-white ">
                        <input type="text" class="form-control form-control-prepended text-white" style="border-color:orange;background-color:rgba(253,126,20,.7);" placeholder="" id="promedioTotal" data-mask="#,###.##" data-mask-reverse="true" disabled>
                        <div class="input-group-prepend">
                          <div class="input-group-text text-white" style="border-color:orange;background-color:rgba(253,126,20,.7);">
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

        </div>
      </div>
    </div>
  </div> <!-- / .main-content -->

  <?php
    include 'scripts.php';
  ?>
</body>
</html>
