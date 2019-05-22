<?php
session_start();
if (isset($_SESSION['id'])) {
  session_unset();
  session_destroy();
}
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- titulo -->
    <title>Mercado Plus - Login</title>
    <!-- descripcion del sitio -->
    <meta name="description" content="Iniciar sesion en Mercado Plus nos dara acceso a todas sus habilidades.">
    <?php include 'resources/css.php'; ?>
    <!-- temas -->
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">
  </head>
  <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">
    <!-- contenido
    ================================================== -->
    <div class="container-fluid">
      <div class="row align-items-center justify-content-center blue-alpha-0">
        <!-- msjbox -->
        <div class="col-lg-6" id="msjBox"></div>
      </div>
      <div class="row align-items-center justify-content-center blue-alpha-0">
        <div class="col-12 col-md-10 col-lg-8 col-xl-4 my-5 p-5 animated flipInX shadow" style="background-color: rgba(0,0,0,.15);">
          <!-- logo -->
          <div class="col-12 text-center mb-4">
            <!-- link -->
            <a href="index.php"><img src="assets/img/logo.png" class="mx-auto img-fluid" alt="..."></a>
          </div>
          <!-- Heading -->
          <h1 class="display-4 text-center mb-3"> Iniciar sesión </h1>
          <!-- Subheading -->
          <p class="text-muted text-center mb-5"> Bienvenidos a nuestro panel de control. </p>
          <!-- Form -->
          <form>
            <!-- Email -->
            <div class="form-group">
              <!-- Label -->
              <label> Email Address </label>
              <!-- Input -->
              <input type="email" id="email" name="email" class="form-control" placeholder="usuario@gmail.com" required>
            </div>
            <!-- Password -->
            <div class="form-group">
              <!-- Label -->
              <label> Password </label>
              <!-- Input group -->
              <div class="input-group input-group-merge">
                <!-- Input -->
                <input type="password" id="pass" name="pass" class="form-control form-control-appended" placeholder="*************" required>
                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>
              </div>
            </div>
          </form>
          <!-- Submit -->
          <button class="btn btn-lg btn-block btn-primary mb-3" onclick="Iniciar_Sesion()"> Iniciar Sesión </button>
          <!-- Link -->
          <div class="text-center">
            <small class="text-muted text-center"> ¿Aun no te registras? <p><a href="registro.php"><strong>Registrate</strong></a></p></small>
          </div>
        </div>
        <div class="d-none d-lg-block">
          <!-- Image -->
          <div class="bg-cover vh-100 mt-n1 mr-n3" style="background-image: transparent;"></div>
        </div>
      </div> <!-- / .row -->
    </div>
    <!-- ================================================== -->
    <?php include 'resources/scripts.php'; ?>
    <!-- push js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.9/push.js" integrity="sha256-p73+snCYhrDo9U6USD9P19LnY1EwAe4+VzQxj/kNyBE=" crossorigin="anonymous"></script>
    <!-- login -->
    <script src="assets/js/login.js" charset="utf-8"></script>
    <!-- tema -->
    <script src="assets/js/theme.min.js"></script>
    <!-- ================================================== -->
  </body>
</html>
