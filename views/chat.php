<script type="text/javascript">
  setInterval(function() {
    mostrarMsjChat();
  },1000);
</script>
<div class="container-fluid pt-6">
  <div class="row">
    <div class="col-lg">

    </div>
    <div class="col-lg-auto">
      <div class="card" style="height:89vh;max-width:550px;">
        <!-- Header -->
        <div class="card-head my-3">
          <div class="row align-items-center">
            <div class="col-auto">
              <!-- Avatar -->
              <!-- <a href="#!" class="avatar">
                <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
              </a> -->
            </div>
            <div class="col ml-n2">
              <div class="dropdown">
                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <!-- Title -->
                  <h4 class="card-title mb-1">
                    Chat General
                    <i class="fe fe-chevron-down"></i>
                  </h4>
                </a>
                <div class="dropdown-menu">
                  <a href="#" class="dropdown-item"> Action </a>
                  <a href="#" class="dropdown-item"> Another action </a>
                  <a href="#" class="dropdown-item"> Something else here </a>
                </div>
              </div>


              <!-- Time -->
              <!-- <p class="card-text small text-muted">
                <span class="fe fe-clock"></span> <time datetime="2018-05-24">4hr ago</time>
              </p> -->
            </div>
            <div class="col-auto">

              <!-- Dropdown -->
              <div class="dropdown">
                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fe fe-more-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <button onclick="chatBot_promediosDia();" class="dropdown-item"> Promedios del Dia </button>
                  <button onclick="" class="dropdown-item"> Tasa de Mercados </button>
                  <button onclick="" class="dropdown-item"> Datos Oficiales </button>
                </div>
              </div>

            </div>
          </div> <!-- / .row -->
        </div>
        <div class="card-body bodyChat" id="bodyChat">
          <div id="boxMsjChat">
            <div class="d-flex align-items-center justify-content-center">
              <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Divider -->
        <hr>
        <div class="container-fluid mb-3">
          <div class="row d-flex justify-content-end">
            <!-- <div class="col-auto d-flex align-items-center"> -->
              <!-- Avatar -->
              <!-- <div class="avatar"> -->
                <?php //echo '<img src="assets/img/avatars/profiles/avatar-'.$_SESSION['id'].'.jpg" alt="..." class="avatar-img rounded-circle">'; ?>
              <!-- </div> -->
            <!-- </div> -->
            <div class="col">
              <!-- Form -->
              <form>
                <div class="row">
                  <label class="sr-only">Escribe un mensaje...</label>
                  <div class="col">
                    <textarea class="form-control" placeholder="Escribe un mensaje..." rows="2" id="msjChat"></textarea>
                  </div>
                  <div class="col-auto d-flex align-items-center">
                    <!-- button -->
                    <button type="button" name="btnEnviarChat" class="btn-lg btn-success" onclick="enviarMsjChat();">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div> <!-- / .row -->
        </div>
      </div>
    </div>
  </div>
</div>
