<?php

session_start();

  switch ($_REQUEST['node']) {
    case 1: // LOGIN (INICIO DE SESION)
      if ($_POST['email'] && $_POST['pass']) {

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        header('location:index.php');

      }else {
        header('location:login.php');
        // echo "<script>history.back();</script>";
      }
      break;
    default:
        header('location:login.php');
      break;
  }





 ?>
