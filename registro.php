<?php
session_start();
if (isset($_SESSION['id'])) {
  session_unset();
  session_destroy();
}
?>
<!doctype html>
<html lang="es">
<?php
  include 'resources/head.php';
?>
<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

  <!-- CONTENT
  ================================================== -->
  <div class="container-fluid">
    <div class="row align-items-center justify-content-center blue-alpha-0">
      <div class="col-12 col-md-10 col-lg-8 col-xl-4 my-5 p-5 animated flipInX shadow" style="background-color: rgba(0,0,0,.15);">
        <div class="col-12 text-center mb-4">
          <a href="index.php"><img src="assets/img/logo.png" class="mx-auto img-fluid" alt="..."></a>
        </div>
        <!-- Heading -->
        <h1 class="display-4 text-center mb-3"> Registro de Usuarios </h1>
        <!-- Subheading -->
        <p class="text-muted text-center mb-5"> Forma parte de un Nuevo Sistema.</p>
        <!-- Form -->
        <form>
          <div class="row">
            <!-- Nombre -->
            <div class="form-group col-xl-6">
              <!-- Label -->
              <label> Nombre </label>
              <!-- Input -->
              <input type="text" id="nombre" name="nombre" class="form-control form-control-appended" placeholder="Jaimito" required>
            </div>
            <!-- Apellido -->
            <div class="form-group col-xl-6">
              <!-- Label -->
              <label> Apellido </label>
              <!-- Input -->
              <input type="text" id="apellido" name="apellido" class="form-control form-control-appended" placeholder="Perez" required>
            </div>
          </div>
          <!-- Email address -->
          <div class="form-group">
            <!-- Label -->
            <label> Email Address </label>
            <!-- Input -->
            <input type="email" id="email" name="email" class="form-control form-control-appended" placeholder="usuario@gmail.com" required>
          </div>
          <div class="row">
            <!-- Password -->
            <div class="form-group col-xl-6">
              <!-- Label -->
              <label> Password </label>
              <!-- Input group -->
              <div class="input-group input-group-merge">
                <!-- Input -->
                <input type="password" id="pass1" name="pass1" class="form-control form-control-appended" placeholder="*************" required>
                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>
              </div>
            </div>
            <!-- Password2 -->
            <div class="form-group col-xl-6">
              <!-- Label -->
              <label> Confirmar Password </label>
              <!-- Input group -->
              <div class="input-group input-group-merge">
                <!-- Input -->
                <input type="password" id="pass2" name="pass2" class="form-control form-control-appended" placeholder="*************" required>
                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <!-- Submit -->
          <a class="btn btn-lg btn-block btn-primary mb-3" onclick="Registrarse();"> Registrarse </a>
          <div class="row ">
            <div class="form-group mx-auto mt-2">
              <!-- Input group -->
              <div class="input-group input-group-merge">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="tyc" required>
                  <label class="text-muted text-small text-center custom-control-label" for="tyc"> Acepto los <a href="#"><strong>Terminos</strong> y <strong>Condiciones</strong></a> </label>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="d-none d-lg-block">
        <!-- Image -->
        <div class="bg-cover vh-100 mt-n1 mr-n3" style="background-image: transparent;"></div>
      </div>
    </div> <!-- / .row -->
  </div>

  <?php
    include 'resources/scripts.php';
  ?>
</body>
</html>
