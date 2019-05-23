<?php
  session_start();
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- titulo -->
    <title>Mercado Plus - Principal</title>
    <!-- descripcion del sitio -->
    <meta name="description" content="Seccion principal de Mercado Plus donde podemos obtener información del promedio dolar oficial y paralelo en venezuela.">
    <?php include 'resources/css.php'; ?>
    <!-- inputs calendario -->
    <link rel="stylesheet" href="assets/libs/flatpickr/dist/flatpickr.min.css">
    <!-- temas -->
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">
  </head>
  <body data-offset="0" style="position:relative;">
    <?php
      include 'components/modals.php';
      include 'components/navbar.php';
    ?>
    <!--  contenido
    ================================================== -->
    <div data-spy="scroll" data-target="#principal" class="main-content w-auto " id="cajaContenido">
      <div>
        <?php
          include 'views/datosotc.php';
          include 'views/datosoficiales.php';
        ?>
      </div>
    </div> <!-- / content -->
    <!-- ================================================== -->
    <?php include 'resources/scripts.php'; ?>
    <!-- push js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.9/push.js" integrity="sha256-p73+snCYhrDo9U6USD9P19LnY1EwAe4+VzQxj/kNyBE=" crossorigin="anonymous"></script>
    <!-- listar datos -->
    <script src="assets/libs/list.js/dist/list.min.js"></script>
    <!-- tema -->
    <script src="assets/js/theme.min.js"></script>
    <!-- datos otc -->
    <script src="assets/js/datos_otc.js"></script>
    <!-- dato oficiales -->
    <script src="assets/js/datos_oficiales.js"></script>
    <!-- ================================================== -->
  </body>
</html>
