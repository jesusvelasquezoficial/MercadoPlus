<!doctype html>
<html lang="en">
<?php
  include 'head.php';
?>
<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

  <!-- CONTENT
  ================================================== -->
  <div class="container-fluid">
    <div class="row align-items-center justify-content-center blue-alpha-0">
      <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5">

        <!-- Heading -->
        <h1 class="display-4 text-center mb-3">
          Iniciar sesión
        </h1>

        <!-- Subheading -->
        <p class="text-muted text-center mb-5">
          Acceso gratuito a nuestro panel de control.
        </p>

        <!-- Form -->
        <form>

          <!-- Email address -->
          <div class="form-group">

            <!-- Label -->
            <label>
              Email Address
            </label>

            <!-- Input -->
            <input type="email" class="form-control" placeholder="name@address.com">

          </div>

          <!-- Password -->
          <div class="form-group">

            <!-- Label -->
            <label>
              Password
            </label>

            <!-- Input group -->
            <div class="input-group input-group-merge">

              <!-- Input -->
              <input type="password" class="form-control form-control-appended" placeholder="Enter your password">

              <!-- Icon -->
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="fe fe-eye"></i>
                </span>
              </div>

            </div>
          </div>

          <!-- Submit -->
          <a class="btn btn-lg btn-block btn-primary mb-3" href="index.php">
            Sign up
          </a>

          <!-- Link -->
          <div class="text-center">
            <small class="text-muted text-center">
              Already have an account? <a href="sign-in-cover.html">Log in</a>.
            </small>
          </div>

        </form>

      </div>
      <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">

        <!-- Image -->
        <div class="bg-cover vh-100 mt-n1 mr-n3" style="background-image: url(assets/img/fondo3.jpg);"></div>

      </div>
    </div> <!-- / .row -->
  </div>

  <?php
    include 'scripts.php';
  ?>
</body>
</html>
