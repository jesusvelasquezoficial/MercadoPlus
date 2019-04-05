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
    case 2: // INSERTAR DATOS OFICIALES
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
            $fecha            = $_POST['fechaDO'];
            $hora             = $_POST['horaDO'];
            // DICOM
            $dolarDicom       = $_POST['dolarDICOM'];
            $euroDicom        = $_POST['euroDICOM'];
            // EURO|DOLAR
            $euroDolar        = $_POST['euroDolar'];
            // BITCOIN (BTC)
            $bitcoinBuy       = $_POST['bitcoinBuy'];
            $bitcoinSell      = $_POST['bitcoinSell'];
            $bitcoinPromedio  = $_POST['bitcoinPromedio'];
            // PETRO
            $petro            = $_POST['petro'];
            $petroSyT         = $_POST['petro1'];
            $petroPyC         = $_POST['petro2'];
            // PETROLEO
            $petroleoWTI      = $_POST['wti'];
            $petroleoBRENT    = $_POST['brent'];
            $petroleoPromedio = $_POST['petroleo'];
            // ORO
            $oroBuy           = $_POST['oroBuy'];
            $oroSell          = $_POST['oroSell'];
            $oroPromedio      = $_POST['oroPromedio'];

            include 'link.php';
            $sql   = "SELECT * FROM datosoficiales";
            $query = mysqli_query($link,$sql);
            $num = mysqli_num_rows($query);

            // SI NO EXISTEN DATOS EN LA TABLA 'datosoficiales'
            if ($num == 0) {
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
                echo "<script>history.back();</script>";
              }else {
                echo "<script>alert('DATOS ERROR.');</script>";
                mysqli_close($link);
                echo "<script>history.back();</script>";
              }


            }else{
              // SEGUNDA ETAPA DE LOGICA
              $sql   = "SELECT * FROM datosoficiales ORDER BY id DESC LIMIT 1";
              $query = mysqli_query($link,$sql);

              while ($row = mysqli_fetch_assoc($query)) {
                $pctvdolardicom = $row['pctvdolardicom'];
              }

              echo $pctvdolardicom;

            }
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
        $nro = 1;
        while ($row = mysqli_fetch_assoc($query)) {
          for ($i=0; $i < count($row) ; $i++) {
            $data[$nro] = $row;
          }
          $nro += 1;
        }

        header('Content-Type: application/json');
        echo json_encode($data);
      }else{

      }
      mysqli_close($link);

      break;
    case 4: // INSERTAR DATOS OTC
      //
      if ($_POST['fechaOTC']                 != "" &&
          $_POST['horaOTC']                  != "" &&
          $_POST['dolartodayBuy']            != "" &&
          $_POST['dolartodaySell']           != "" &&
          $_POST['dolartodayPromedio']       != "" &&
          $_POST['dolartodayBTCBuy']         != "" &&
          $_POST['dolartodayBTCSell']        != "" &&
          $_POST['dolartodayBTCPromedio']    != "" &&
          $_POST['airTMBuy']                 != "" &&
          $_POST['airTMSell']                != "" &&
          $_POST['airTMPromedio']            != "" &&
          $_POST['dolarTrueBuy']             != "" &&
          $_POST['dolarTrueSell']            != "" &&
          $_POST['dolarTruePromedio']        != "" &&
          $_POST['monitorDolarVZLABuy']      != "" &&
          $_POST['monitorDolarVZLASell']     != "" &&
          $_POST['monitorDolarVZLAPromedio'] != "" &&
          $_POST['MKambioBuy']               != "" &&
          $_POST['MKambioSell']              != "" &&
          $_POST['MKambioPromedio']          != "" &&
          $_POST['dolarGoldBuy']             != "" &&
          $_POST['dolarGoldSell']            != "" &&
          $_POST['dolarGoldPromedio']        != "" &&
          $_POST['dolarFTBuy']               != "" &&
          $_POST['dolarFTSell']              != "" &&
          $_POST['dolarFTPromedio']          != "" &&
          $_POST['dolarC']                   != "" &&
          $_POST['dolarV']                   != "" &&
          $_POST['euroC']                    != "" &&
          $_POST['euroV']                    != "" &&
          $_POST['promedioTotal']            != ""
        ){
          $fecha = $_POST['fechaOTC'];
          $hora  = $_POST['horaOTC'];
          $dolartodayBuy = $_POST['dolartodayBuy'];
          $dolartodaySell = $_POST['dolartodaySell'];
          $dolartodayPromedio = $_POST['dolartodayPromedio'];
          $dolartodaybtcBuy = $_POST['dolartodayBTCBuy'];
          $dolartodaybtcSell = $_POST['dolartodayBTCSell'];
          $dolartodaybtcPromedio = $_POST['dolartodayBTCPromedio'];
          $airtmBuy = $_POST['airTMBuy'];
          $airtmSell = $_POST['airTMSell'];
          $airtmPromedio = $_POST['airTMPromedio'];
          $dolartrueBuy = $_POST['dolarTrueBuy'];
          $dolartrueSell = $_POST['dolarTrueSell'];
          $dolartruePromedio = $_POST['dolarTruePromedio'];
          $monitordolarvzlaBuy = $_POST['monitorDolarVZLABuy'];
          $monitordolarvzlaSell = $_POST['monitorDolarVZLASell'];
          $monitordolarvzlaPromedio = $_POST['monitorDolarVZLAPromedio'];
          $mkambioBuy = $_POST['MKambioBuy'];
          $mkambioSell = $_POST['MKambioSell'];
          $mkambioPromedio = $_POST['MKambioPromedio'];
          $dolargoldBuy = $_POST['dolarGoldBuy'];
          $dolargoldSell = $_POST['dolarGoldSell'];
          $dolargoldPromedio = $_POST['dolarGoldPromedio'];
          $dolarftBuy = $_POST['dolarFTBuy'];
          $dolarftSell = $_POST['dolarFTSell'];
          $dolarftPromedio = $_POST['dolarFTPromedio'];
          $dolarC = $_POST['dolarC'];
          $dolarV = $_POST['dolarV'];
          $euroC = $_POST['euroC'];
          $euroV = $_POST['euroV'];
          $promediototal = $_POST['promedioTotal'];

          include 'link.php';
          $sql = "INSERT INTO datosotc (
            id,
            fecha,
            hora,
            dolartodaybuy,
            pctvdolartodaybuy,
            dolartodaysell,
            pctvdolartodaysell,
            dolartodaypromedio,
            pctvdolartodaypromedio,
            dolartodaybtcbuy,
            pctvdolartodaybtcbuy,
            dolartodaybtcsell,
            pctvdolartodaybtcsell,
            dolartodaybtcpromedio,
            pctvdolartodaybtcpromedio,
            airtmbuy,
            pctvairtmbuy,
            airtmsell,
            pctvairtmsell,
            airtmpromedio,
            pctvairtmpromedio,
            dolartruebuy,
            pctvdolartruebuy,
            dolartruesell,
            pctvdolartruesell,
            dolartruepromedio,
            pctvdolartruepromedio,
            monitordolarvzlabuy,
            pctvmonitordolarvzlabuy,
            monitordolarvzlasell,
            pctvmonitordolarvzlasell,
            monitordolarvzlapromedio,
            pctvmonitordolarvzlapromedio,
            mkambiobuy,
            pctvmkambiobuy,
            mkambiosell,
            pctvmkambiosell,
            mkambiopromedio,
            pctvmkambiopromedio,
            dolargoldbuy,
            pctvdolargoldbuy,
            dolargoldsell,
            pctvdolargoldsell,
            dolargoldpromedio,
            pctvdolargoldpromedio,
            dolarftbuy,
            pctvdolarftbuy,
            dolarftsell,
            pctvdolarftsell,
            dolarftpromedio,
            pctvdolarftpromedio,
            dolarc,
            pctvdolarc,
            dolarv,
            pctvdolarv,
            euroc,
            pctveuroc,
            eurov,
            pctveurov,
            promediototal,
            pctvpromediototal
          ) VALUES (
            0,
            '".$fecha."',
            '".$hora."',
            '".$dolartodayBuy."',
            0,
            '".$dolartodaySell."',
            0,
            '".$dolartodayPromedio."',
            0,
            '".$dolartodaybtcBuy."',
            0,
            '".$dolartodaybtcSell."',
            0,
            '".$dolartodaybtcPromedio."',
            0,
            '".$airtmBuy."',
            0,
            '".$airtmSell."',
            0,
            '".$airtmPromedio."',
            0,
            '".$dolartrueBuy."',
            0,
            '".$dolartrueSell."',
            0,
            '".$dolartruePromedio."',
            0,
            '".$monitordolarvzlaBuy."',
            0,
            '".$monitordolarvzlaSell."',
            0,
            '".$monitordolarvzlaPromedio."',
            0,
            '".$mkambioBuy."',
            0,
            '".$mkambioSell."',
            0,
            '".$mkambioPromedio."',
            0,
            '".$dolargoldBuy."',
            0,
            '".$dolargoldSell."',
            0,
            '".$dolargoldPromedio."',
            0,
            '".$dolarftBuy."',
            0,
            '".$dolarftSell."',
            0,
            '".$dolarftPromedio."',
            0,
            '".$dolarC."',
            0,
            '".$dolarV."',
            0,
            '".$euroC."',
            0,
            '".$euroV."',
            0,
            '".$promediototal."',
            0
          )";
          $query = mysqli_query($link,$sql);
          // SI NO HAY ERRORES DE CONEXION
          if (!mysqli_error($link)) {
            echo "<script>alert('Datos Ingresados Correctamente.');</script>";
            mysqli_close($link);
            echo "<script>history.back();</script>";
          }else {
            echo "<script>alert('DATOS ERROR.');</script>";
            mysqli_close($link);
            echo "<script>history.back();</script>";
          }


        // }else{
        //   // SEGUNDA ETAPA DE LOGICA
        // }
      }
      break;
    case 5: // MOSTRAR DATOS OTC

      include 'link.php';
      $sql = 'SELECT * FROM datosotc ORDER BY id DESC';
      $query = mysqli_query($link,$sql);
      $num = mysqli_num_rows($query);

      if ($num != 0) {
        $data = array();
        $nro = 1;
        while ($row = mysqli_fetch_assoc($query)) {
          for ($i=0; $i < count($row) ; $i++) {
            $data[$nro] = $row;
          }
          $nro += 1;
        }

        header('Content-Type: application/json');
        echo json_encode($data);
      }else{

      }
      mysqli_close($link);

      break;
    default:
        header('location:login.php');
      break;
  }





 ?>
