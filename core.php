<?php
  
  session_start();

  // Trabajamos el nucleo con un switch
  switch ($_REQUEST['node']) {
    case 1: // LOGIN ( INICIO DE SESION )
      // SI LLEGA 'EMAIL' AND 'PASS'
      if ($_POST['email'] && $_POST['pass']) {
        // Incluimos la conexion a la DB.
        include 'link.php';
        // Variables
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        // QUERY Y SOLICITUD DE DATOS.
        $sql = "SELECT * FROM usuarios WHERE email='".$email."'";
        $query = mysqli_query($link, $sql);
        $num = mysqli_num_rows($query);
        // SI CONSIGUE UN EMAIL EN LA TABLA 'usuarios'
        if ($num != 0) {
          // Creamos un ARREGLO del QUERY.
          $row = mysqli_fetch_array($query);
          // SI EL 'PASSWORD' DEL CLIENTE, CONVERTIDO A 'MD5' ES = AL 'PASSWORD' DE LA DB.
          if (md5($pass) == $row['password'] ) {
            // almacenamos datos del usuario en la $_SESSION['var'].
            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            // Damos la 'Bienvenida' al Cliente.
            echo "<script>alert('Bienvenido ".$_SESSION['nombre']." ".$_SESSION['apellido']."');</script>";
            // Redireccionamiento a la pagina principal.
            echo "<script>location.href='index.php'</script>";

          // SI EL PASSWORD ES 'INCORRECTO'.
          }else{
            // Alertamos de 'Password Incorrecto'.
            echo "<script>alert('Password Incorrecto');</script>";
            // Devolvemos al Cliente.
            echo "<script>history.back();</script>";
          }
        // SI EL EMAIL NO EXISTE EN LA DB.
        }else {
          // Alertamos de que el 'Email no existe en la DB.'
          echo "<script>alert('Password Incorrecto');</script>";
          // Devolvemos al Cliente.
          echo "<script>history.back();</script>";
        }
      // SI NO LLEGA UN 'EMAL' AND 'PASS'
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
