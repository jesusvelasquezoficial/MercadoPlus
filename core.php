<?php
  // Iniciamos una Session.
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

            mysqli_close($link);
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
    case 2: // INSERTAR Datos Oficiales
      // SI LLEGARON TODOS LOS DATOS
      if ($_POST['fechaDO']          != "" &&
          $_POST['horaDO']           != "" &&
          $_POST['dolarDICOM']       != "" &&
          $_POST['euroDICOM']        != "" &&
          $_POST['euroDolar']        != "" &&
          $_POST['bitcoinBuy']       != "" &&
          $_POST['bitcoinSell']      != "" &&
          $_POST['bitcoinPromedio']  != "" &&
          $_POST['petro']            != "" &&
          $_POST['petro1']           != "" &&
          $_POST['petro2']           != "" &&
          $_POST['wti']              != "" &&
          $_POST['brent']            != "" &&
          $_POST['petroleo']         != "" &&
          $_POST['oroBuy']           != "" &&
          $_POST['oroSell']          != "" &&
          $_POST['oroPromedio']      != "") {

            // DATA TIME
            $fecha = $_POST['fechaDO'];
            $hora  = $_POST['horaDO'];
            // DICOM
            $dolarDicom = $_POST['dolarDICOM'];
            $euroDicom  = $_POST['euroDICOM'];
            // EURO|DOLAR
            $euroDolar = $_POST['euroDolar'];
            // BITCOIN (BTC)
            $bitcoinBuy  = $_POST['bitcoinBuy'];
            $bitcoinSell = $_POST['bitcoinSell'];
            $bitcoinPromedio = $_POST['bitcoinPromedio'];
            // PETRO
            $petro    = $_POST['petro'];
            $petroSyT = $_POST['petro1'];
            $petroPyC = $_POST['petro2'];
            // PETROLEO
            $petroleoWTI      = $_POST['wti'];
            $petroleoBRENT    = $_POST['brent'];
            $petroleoPromedio = $_POST['petroleo'];
            // ORO
            $oroBuy      = $_POST['oroBuy'];
            $oroSell     = $_POST['oroSell'];
            $oroPromedio = $_POST['oroPromedio'];

            include 'link.php';
            $sql   = "SELECT * FROM datosoficiales";
            $query = mysqli_query($link,$sql);
            $num = mysqli_num_rows($query);
            // SI NO EXISTEN DATOS EN LA TABLA 'datosoficiales'
            // if ($num == 0) {
              $sql2 = "INSERT INTO datosoficiales (
                id,
                fecha,
                hora,
                dolardicom,
                pctvdolardicom,
                eurodicom,
                pctveurodicom,
                eurodolar,
                pctveurodolar,
                bitcoinbuy,
                pctvbitcoinbuy,
                bitcoinsell,
                pctvbitcoinsell,
                bitcoinpromedio,
                pctvbitcoinpromedio,
                petro,
                pctvpetro,
                petro1,
                pctvpetro1,
                petro2,
                pctvpetro2,
                wti,
                pctvwti,
                brent,
                pctvbrent,
                petroleo,
                pctvpetroleo,
                orobuy,
                pctvorobuy,
                orosell,
                pctvorosell,
                oropromedio,
                pctvoropromedio
              ) VALUES (
                0,
                '".$fecha."',
                '".$hora."',
                '".$dolarDicom."',
                0,
                '".$euroDicom."',
                0,
                '".$euroDolar."',
                0,
                '".$bitcoinBuy."',
                0,
                '".$bitcoinSell."',
                0,
                '".$bitcoinPromedio."',
                0,
                '".$petro."',
                0,
                '".$petroSyT."',
                0,
                '".$petroPyC."',
                0,
                '".$petroleoWTI."',
                0,
                '".$petroleoBRENT."',
                0,
                '".$petroleoPromedio."',
                0,
                '".$oroBuy."',
                0,
                '".$oroSell."',
                0,
                '".$oroPromedio."',
                0
              )";
              $query2 = mysqli_query($link,$sql2);

              // SI NO HAY ERRORES DE CONEXION
              if (!mysqli_error($link)) {
                echo "<script>alert('Datos Ingresados Correctamente.');</script>";
                mysqli_close($link);
                echo "<script>location.href='index.php'</script>";
              }else {
                echo "<script>alert('DATOS ERROR.');</script>";
                mysqli_close($link);
                echo "<script>history.back();</script>";
              }


            // }else{
            //   // SEGUNDA ETAPA DE LOGICA
            // }
        }else {
          echo "<script>alert('ENTRO');</script>";
        }
      break;
    case 3: // MOSTRAR DATOS OFICIALES

      include 'link.php';
      $sql = 'SELECT * FROM datosoficiales ORDER BY id DESC';
      $query = mysqli_query($link,$sql);
      $num = mysqli_num_rows($query);

      if ($num != 0) {
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) {
          for ($i=0; $i < count($row) ; $i++) {
            $data[$i] = $row;
          }
        }

        header('Content-Type: application/json');
        echo json_encode($data);
      }else{

      }
      mysqli_close($link);

      break;
    case 4:
      // code...
      break;
    default:
        header('location:login.php');
      break;
  }





 ?>
