<?php
  session_start();
  if (isset($_SESSION['id']) && $_SESSION['role'] != "") {
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Titulo -->
    <title>Mercado Plus - Chat</title>
    <!-- Descripcion del sitio -->
    <meta name="description" content="Sala de chat para conectarse y conversar con otros usuarios registrados en Mercado Plus.">
    <?php include 'resources/css.php'; ?>
    <!-- Inputs calendario -->
    <link rel="stylesheet" href="assets/libs/flatpickr/dist/flatpickr.min.css">
    <!-- Temas -->
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">
  </head>
  <body data-offset="0" style="position:relative;">
    <?php
      include 'components/modals.php';
      include 'components/navbar.php';
    ?>
    <!-- contenido
    ================================================== -->
    <div data-spy="scroll" data-target="cajaChat" class="main-content w-auto " id="cajaChat">
        <?php
          include 'views/chat.php';
        ?>
    </div> <!-- / contenido -->
    <!-- ================================================== -->
    <?php include 'resources/scripts.php'; ?>
    <!-- inputs calendario -->
    <script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <!-- listar datos -->
    <script src="assets/libs/list.js/dist/list.min.js"></script>
    <!-- mascara de datos -->
    <script src="assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <!-- tema -->
    <script src="assets/js/theme.min.js"></script>
    <!-- ================================================== -->
  </body>
</html>
<?php
}else {
  echo '<script>history.back();</script>';
}
?>
