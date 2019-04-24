<script type="text/javascript">
  setInterval(function() {
    mostrarMsjChat();
  },1000);
</script>
<div class="container-fluid pt-6">
  <div class="card" style="height:89vh;">
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
          <!-- Title -->
          <h4 class="card-title mb-1">
            Chat General
          </h4>
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
              <a href="#!" class="dropdown-item">
                Action
              </a>
              <a href="#!" class="dropdown-item">
                Another action
              </a>
              <a href="#!" class="dropdown-item">
                Something else here
              </a>
            </div>
          </div>

        </div>
      </div> <!-- / .row -->
    </div>
    <div class="card-body bodyChat" id="bodyChat">
      <div id="boxMsjChat">
        <!-- Comments -->
        <div class="comment mb-3 float-right">
          <div class="row">
            <div class="col ml-n2">
              <!-- Body -->
              <div class="comment-body">
                <div class="row">
                  <div class="col">
                    <!-- Time -->
                    <time class="comment-time">
                      11:12
                    </time>
                  </div>
                  <div class="col-auto">
                    <!-- Title -->
                    <h5 class="comment-title">
                      Adolfo Hess
                    </h5>
                  </div>
                </div> <!-- / .row -->
                <!-- Text -->
                <p class="comment-text">
                  Any chance you're going to link the grid up to a public gallery of sites built with Launchday?
                </p>
              </div>
            </div>
            <div class="col-auto">
              <!-- Avatar -->
              <a class="avatar" href="profile-posts.html">
                <img src="assets/img/avatars/profiles/0.png" alt="..." class="avatar-img rounded-circle">
              </a>
            </div>
          </div> <!-- / .row -->
        </div>
      </div>
    </div>
    <!-- Divider -->
    <hr>
    <div class="container-fluid mb-3">
      <div class="row justify-content-end">
        <div class="col-auto align-items-center">
          <!-- Avatar -->
          <div class="avatar">
            <img src="assets/img/avatars/profiles/0.png" alt="..." class="avatar-img rounded-circle">
          </div>
        </div>
        <div class="col ml-n2">
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
