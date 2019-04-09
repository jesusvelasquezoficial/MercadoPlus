<!-- View 2 -->
<div class="pt-6 h-auto" id="view1" style="height:1080px;">
  <!-- HEADER -->
  <div class="header">
    <div class="container-fluid">
      <!-- Body -->
      <div class="header-body">
        <div class="row align-items-end">
          <div class="col">
            <!-- Pretitle -->
            <h4 class="header-pretitle">
              <!-- Overview -->
              Visión general
            </h4>
            <!-- Title -->
            <h2 class="header-title">Información del promedio dolar oficial y paralelo en venezuela</h2>
          </div>
          <!-- Fecha y Hora -->
          <div class="col-auto">
            <ul class="list-group text-right" id="fechayhoraOTC"></ul>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .header-body -->
    </div>
  </div> <!-- / .header -->

  <!-- CARDS -->
  <div class="container-fluid">
    <div class="row">
      <!-- Tasa de Mercados -->
      <div class="col-12 col-xl-6">
        <!-- Goals -->
        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col">
                <!-- Title -->
                <h2 class="card-header-title text-center">
                  Tasas de Mercados
                </h2>
              </div>
            </div> <!-- / .row -->
          </div>
          <div class="table-responsive mb-0">
            <table class="table table-sm table-nowrap card-table">
              <tbody class="list" id="bodyTasasMercados"> </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Promedio del Dia -->
      <div class="col-12 col-xl-6">
        <!-- Card -->
        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col">
                <!-- Title -->
                <h2 class="card-header-title text-center">
                  Promedio del Dia
                </h2>
              </div>
            </div> <!-- / .row -->
          </div>
          <div class="card-body text-center" id="promediosDia"> </div>
        </div>
      </div>
      <!-- Nota Importante  -->
      <div class="col-12">
        <div class="alert alert-light alert-dismissible fade show" role="alert">
          <strong> NOTA IMPORTANTE:</strong> Los precios reflejados son obtenidos de los indicadores referenciales y los resultados son mostrado a modo de orientacion.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div> <!-- / .row -->
  </div>
</div>
