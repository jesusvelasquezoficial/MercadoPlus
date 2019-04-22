<?php
  // Iniciamos una Session.
  session_start();

  // Trabajamos el nucleo con un switch
  switch ($_REQUEST['node']) {
    case 1: // LOGIN ( INICIO DE SESION )
      // SI LLEGA 'EMAIL' AND 'PASS'
      if ($_POST['email'] && $_POST['pass']) {
        // Incluimos la conexion a la DB.
        include 'config/link.php';
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

            $_SESSION['msj'] = "Bienvenido ".$_SESSION['nombre']." ".$_SESSION['apellido'];
            // Redireccionamiento a la pagina principal.
            echo "<script>location.href='../index.php'</script>";

          // SI EL PASSWORD ES 'INCORRECTO'.
          }else{
            // Alertamos de 'Password Incorrecto'.
            $_SESSION['msj'] = "Password Incorrecto";
            // Devolvemos al Cliente.
            echo "<script>history.back();</script>";
          }
        // SI EL EMAIL NO EXISTE EN LA DB.
        }else {
          // Alertamos de que el 'Email no existe en la DB.'
          $_SESSION['msj'] = "Email Incorrecto";
          // Devolvemos al Cliente.
          echo "<script>history.back();</script>";
        }
      // SI NO LLEGA UN 'EMAL' AND 'PASS'
      }else {
        header('location:../login.php');
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

            include 'config/link.php';
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
                $_SESSION['msj'] = "Datos Ingresados Correctamente.";
                mysqli_close($link);
                echo "<script>history.back();</script>";
              }else {
                $_SESSION['msj'] = "Error de Conexión.";
                mysqli_close($link);
                echo "<script>history.back();</script>";
              }


            }else{
              // SEGUNDA ETAPA DE LOGICA
              $sql   = "SELECT * FROM datosoficiales ORDER BY id DESC LIMIT 1";
              $query = mysqli_query($link,$sql);

              while ($row = mysqli_fetch_assoc($query)) {

                $Adolardicom = str_replace(",","", $row['dolardicom']);
                $Aeurodicom = str_replace(",","", $row['eurodicom']);
                $Aeurodolar = str_replace(",","", $row['eurodolar']);
                $Abitcoinbuy = str_replace(",","", $row['bitcoinbuy']);
                $Abitcoinsell = str_replace(",","", $row['bitcoinsell']);
                $Abitcoinpromedio = str_replace(",","", $row['bitcoinpromedio']);
                $Apetro = str_replace(",","", $row['petro']);
                $Apetro1 = str_replace(",","", $row['petro1']);
                $Apetro2 = str_replace(",","", $row['petro2']);
                $Awti = str_replace(",","", $row['wti']);
                $Abrent = str_replace(",","", $row['brent']);
                $Apetroleo = str_replace(",","", $row['petroleo']);
                $Aorobuy = str_replace(",","", $row['orobuy']);
                $Aorosell = str_replace(",","", $row['orosell']);
                $Aoropromedio = str_replace(",","", $row['oropromedio']);


              }


              $b = str_replace(",","", $dolarDicom);
              $c = ($b - $Adolardicom);
              $pctvdolardicom = number_format($c / $b,2);

              $b2 = str_replace(",","", $euroDicom);
              $c2 = ($b2 - $Aeurodicom);
              $pctveurodicom = number_format($c2 / $b2,2);

              $b3 = str_replace(",","", $euroDolar);
              $c3 = ($b3 - $Aeurodolar);
              $pctveurodolar = number_format($c3 / $b3,2);

              $b4 = str_replace(",","", $bitcoinBuy);
              $c4 = ($b4 - $Abitcoinbuy);
              $pctvbitcoinbuy = number_format($c4 / $b4,2);

              $b5 = str_replace(",","", $bitcoinSell);
              $c5 = ($b5 - $Abitcoinsell);
              $pctvbitcoinsell = number_format($c5 / $b5,2);

              $b6 = str_replace(",","", $bitcoinPromedio);
              $c6 = ($b6 - $Abitcoinpromedio);
              $pctvbitcoinpromedio = number_format($c6 / $b6,2);

              $b7 = str_replace(",","", $petro);
              $c7 = ($b7 - $Apetro);
              $pctvpetro = number_format($c7 / $b7,2);

              $b8 = str_replace(",","", $petroSyT);
              $c8 = ($b8 - $Apetro1);
              $pctvpetro1 = number_format($c8 / $b8,2);

              $b9 = str_replace(",","", $petroPyC);
              $c9 = ($b9 - $Apetro2);
              $pctvpetro2 = number_format($c9 / $b9,2);

              $b10 = str_replace(",","", $petroleoWTI);
              $c10 = ($b10 - $Awti);
              $pctvwti = number_format($c10 / $b10,2);

              $b11 = str_replace(",","", $petroleoBRENT);
              $c11 = ($b11 - $Abrent);
              $pctvbrent = number_format($c11 / $b11,2);

              $b12 = str_replace(",","", $petroleoPromedio);
              $c12 = ($b12 - $Apetroleo);
              $pctvpetroleo = number_format($c12 / $b12,2);

              $b13 = str_replace(",","", $oroBuy);
              $c13 = ($b13 - $Aorobuy);
              $pctvorobuy = number_format($c13 / $b13,2);

              $b14 = str_replace(",","", $oroSell);
              $c14 = ($b14 - $Aorosell);
              $pctvorosell = number_format($c14 / $b14,2);

              $b15 = str_replace(",","", $oroPromedio);
              $c15 = ($b15 - $Aoropromedio);
              $pctvoropromedio = number_format($c15 / $b15,2);

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
                '".$pctvdolardicom."',
                '".$euroDicom."',
                '".$pctveurodicom."',
                '".$euroDolar."',
                '".$pctveurodolar."',
                '".$bitcoinBuy."',
                '".$pctvbitcoinbuy."',
                '".$bitcoinSell."',
                '".$pctvbitcoinsell."',
                '".$bitcoinPromedio."',
                '".$pctvbitcoinpromedio."',
                '".$petro."',
                '".$pctvpetro."',
                '".$petroSyT."',
                '".$pctvpetro1."',
                '".$petroPyC."',
                '".$pctvpetro2."',
                '".$petroleoWTI."',
                '".$pctvwti."',
                '".$petroleoBRENT."',
                '".$pctvbrent."',
                '".$petroleoPromedio."',
                '".$pctvpetroleo."',
                '".$oroBuy."',
                '".$pctvorobuy."',
                '".$oroSell."',
                '".$pctvorosell."',
                '".$oroPromedio."',
                '".$pctvoropromedio."'
              )";

              $query2 = mysqli_query($link,$sql2);

              // SI NO HAY ERRORES DE CONEXION
              if (!mysqli_error($link)) {
                $_SESSION['msj'] = "Datos Ingresados Correctamente.";
                mysqli_close($link);
                echo "<script>history.back();</script>";
              }else {
                $_SESSION['msj'] = "Error de Conexión.";
                mysqli_close($link);
                echo "<script>history.back();</script>";
              }

            }
        }else {
          echo "<script>alert('ENTRO');</script>";
        }
    break;
    case 3: // MOSTRAR DATOS OFICIALES
      include 'config/link.php';
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
      // SI LLEGARON TODOS LOS DATOS
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

          include 'config/link.php';
          $sql = "SELECT * FROM datosotc";
          $query = mysqli_query($link,$sql);
          $num = mysqli_num_rows($query);

          if ($num == 0) {
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
              $_SESSION['msj'] = "Datos Ingresados Correctamente.";
              mysqli_close($link);
              echo "<script>history.back();</script>";
            }else {
              $_SESSION['msj'] = "Error de Conexión.";
              mysqli_close($link);
              echo "<script>history.back();</script>";
            }

          }else{
            // SEGUNDA ETAPA DE LOGICA
            $sql   = "SELECT * FROM datosotc ORDER BY id DESC LIMIT 1";
            $query = mysqli_query($link,$sql);

            while ($row = mysqli_fetch_assoc($query)) {

              $Adolartodaybuy = str_replace(",","", $row['dolartodaybuy']);
              $Adolartodaysell = str_replace(",","", $row['dolartodaysell']);
              $Adolartodaypromedio = str_replace(",","", $row['dolartodaypromedio']);

              $Adolartodaybtcbuy = str_replace(",","", $row['dolartodaybtcbuy']);
              $Adolartodaybtcsell = str_replace(",","", $row['dolartodaybtcsell']);
              $Adolartodaybtcpromedio = str_replace(",","", $row['dolartodaybtcpromedio']);

              $Aairtmbuy = str_replace(",","", $row['airtmbuy']);
              $Aairtmsell = str_replace(",","", $row['airtmsell']);
              $Aairtmpromedio = str_replace(",","", $row['airtmpromedio']);

              $Adolartruebuy = str_replace(",","", $row['dolartruebuy']);
              $Adolartruesell = str_replace(",","", $row['dolartruesell']);
              $Adolartruepromedio = str_replace(",","", $row['dolartruepromedio']);

              $Amonitordolarvzlabuy = str_replace(",","", $row['monitordolarvzlabuy']);
              $Amonitordolarvzlasell = str_replace(",","", $row['monitordolarvzlasell']);
              $Amonitordolarvzlapromedio = str_replace(",","", $row['monitordolarvzlapromedio']);

              $Amkambiobuy = str_replace(",","", $row['mkambiobuy']);
              $Amkambiosell = str_replace(",","", $row['mkambiosell']);
              $Amkambiopromedio = str_replace(",","", $row['mkambiopromedio']);

              $Adolargoldbuy = str_replace(",","", $row['dolargoldbuy']);
              $Adolargoldsell = str_replace(",","", $row['dolargoldsell']);
              $Adolargoldpromedio = str_replace(",","", $row['dolargoldpromedio']);

              $Adolarftbuy = str_replace(",","", $row['dolarftbuy']);
              $Adolarftsell = str_replace(",","", $row['dolarftsell']);
              $Adolarftpromedio = str_replace(",","", $row['dolarftpromedio']);

              $Adolarc = str_replace(",","", $row['dolarc']);
              $Adolarv = str_replace(",","", $row['dolarv']);

              $Aeuroc = str_replace(",","", $row['euroc']);
              $Aeurov = str_replace(",","", $row['eurov']);

              $Apromediototal = str_replace(",","", $row['promediototal']);

              $b = str_replace(",","", $dolartodayBuy);
              $c = ($b - $Adolartodaybuy);
              $pctvdolartodaybuy = number_format($c / $b,2);

              $b2 = str_replace(",","", $dolartodaySell);
              $c2 = ($b2 - $Adolartodaysell);
              $pctvdolartodaysell = number_format($c2 / $b2,2);

              $b3 = str_replace(",","", $dolartodayPromedio);
              $c3 = ($b3 - $Adolartodaypromedio);
              $pctvdolartodaypromedio = number_format($c3 / $b3,2);

              $b4 = str_replace(",","", $dolartodaybtcBuy);
              $c4 = ($b4 - $Adolartodaybtcbuy);
              $pctvdolartodaybtcbuy = number_format($c4 / $b4,2);

              $b5 = str_replace(",","", $dolartodaybtcSell);
              $c5 = ($b5 - $Adolartodaybtcsell);
              $pctvdolartodaybtcsell = number_format($c5 / $b5,2);

              $b6 = str_replace(",","", $dolartodaybtcPromedio);
              $c6 = ($b6 - $Adolartodaybtcpromedio);
              $pctvdolartodaybtcpromedio = number_format($c6 / $b6,2);

              $b7 = str_replace(",","", $monitordolarvzlaBuy);
              $c7 = ($b7 - $Amonitordolarvzlabuy);
              $pctvmonitordolarvzlabuy = number_format($c7 / $b7,2);

              $b8 = str_replace(",","", $monitordolarvzlaSell);
              $c8 = ($b8 - $Amonitordolarvzlasell);
              $pctvmonitordolarvzlasell = number_format($c8 / $b8,2);

              $b9 = str_replace(",","", $monitordolarvzlaPromedio);
              $c9 = ($b9 - $Amonitordolarvzlapromedio);
              $pctvmonitordolarvzlapromedio = number_format($c9 / $b9,2);

              $b10 = str_replace(",","", $dolartrueBuy);
              $c10 = ($b10 - $Adolartruebuy);
              $pctvdolartruebuy = number_format($c10 / $b10,2);

              $b11 = str_replace(",","", $dolartrueSell);
              $c11 = ($b11 - $Adolartruesell);
              $pctvdolartruesell = number_format($c11 / $b11,2);

              $b12 = str_replace(",","", $dolartruePromedio);
              $c12 = ($b12 - $Adolartruepromedio);
              $pctvdolartruepromedio = number_format($c12 / $b12,2);

              $b13 = str_replace(",","", $mkambioBuy);
              $c13 = ($b13 - $Amkambiobuy);
              $pctvmkambiobuy = number_format($c13 / $b13,2);

              $b14 = str_replace(",","", $mkambioSell);
              $c14 = ($b14 - $Amkambiosell);
              $pctvmkambiosell = number_format($c14 / $b14,2);

              $b15 = str_replace(",","", $mkambioPromedio);
              $c15 = ($b15 - $Amkambiopromedio);
              $pctvmkambiopromedio = number_format($c15 / $b15,2);

              $b16 = str_replace(",","", $dolargoldBuy);
              $c16 = ($b16 - $Adolargoldbuy);
              $pctvdolargoldbuy = number_format($c16 / $b16,2);

              $b17 = str_replace(",","", $dolargoldSell);
              $c17 = ($b17 - $Adolargoldsell);
              $pctvdolargoldsell = number_format($c17 / $b17,2);

              $b18 = str_replace(",","", $dolargoldPromedio);
              $c18 = ($b18 - $Adolargoldpromedio);
              $pctvdolargoldpromedio = number_format($c18 / $b18,2);

              $b19 = str_replace(",","", $dolarftBuy);
              $c19 = ($b19 - $Adolarftbuy);
              $pctvdolarftbuy = number_format($c19 / $b19,2);

              $b20 = str_replace(",","", $dolarftSell);
              $c20 = ($b20 - $Adolarftsell);
              $pctvdolarftsell = number_format($c20 / $b20,2);

              $b21 = str_replace(",","", $dolarftPromedio);
              $c21 = ($b21 - $Adolarftpromedio);
              $pctvdolarftpromedio = number_format($c21 / $b21,2);

              $b19 = str_replace(",","", $dolarC);
              $c19 = ($b19 - $Adolarc);
              $pctvdolarc = number_format($c19 / $b19,2);

              $b20 = str_replace(",","", $dolarV);
              $c20 = ($b20 - $Adolarv);
              $pctvdolarv = number_format($c20 / $b20,2);

              $b21 = str_replace(",","", $euroC);
              $c21 = ($b21 - $Aeuroc);
              $pctveuroc = number_format($c21 / $b21,2);

              $b22 = str_replace(",","", $euroV);
              $c22 = ($b22 - $Aeurov);
              $pctveurov = number_format($c22 / $b22,2);

              $b23 = str_replace(",","", $promediototal);
              $c23 = ($b23 - $Apromediototal);
              $pctvpromediototal = number_format($c23 / $b23,2);

              $b24 = str_replace(",","", $airtmBuy);
              $c24 = ($b24 - $Aairtmbuy);
              $pctvairtmbuy = number_format($c24 / $b24,2);

              $b25 = str_replace(",","", $airtmSell);
              $c25 = ($b25 - $Aairtmsell);
              $pctvairtmsell = number_format($c25 / $b25,2);

              $b26 = str_replace(",","", $airtmPromedio);
              $c26 = ($b26 - $Aairtmpromedio);
              $pctvairtmpromedio = number_format($c26 / $b26,2);

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
                '".$pctvdolartodaybuy."',
                '".$dolartodaySell."',
                '".$pctvdolartodaysell."',
                '".$dolartodayPromedio."',
                '".$pctvdolartodaypromedio."',
                '".$dolartodaybtcBuy."',
                '".$pctvdolartodaybtcbuy."',
                '".$dolartodaybtcSell."',
                '".$pctvdolartodaybtcsell."',
                '".$dolartodaybtcPromedio."',
                '".$pctvdolartodaybtcpromedio."',
                '".$airtmBuy."',
                '".$pctvairtmbuy."',
                '".$airtmSell."',
                '".$pctvairtmsell."',
                '".$airtmPromedio."',
                '".$pctvairtmpromedio."',
                '".$dolartrueBuy."',
                '".$pctvdolartruebuy."',
                '".$dolartrueSell."',
                '".$pctvdolartruesell."',
                '".$dolartruePromedio."',
                '".$pctvdolartruepromedio."',
                '".$monitordolarvzlaBuy."',
                '".$pctvmonitordolarvzlabuy."',
                '".$monitordolarvzlaSell."',
                '".$pctvmonitordolarvzlasell."',
                '".$monitordolarvzlaPromedio."',
                '".$pctvmonitordolarvzlapromedio."',
                '".$mkambioBuy."',
                '".$pctvmkambiobuy."',
                '".$mkambioSell."',
                '".$pctvmkambiosell."',
                '".$mkambioPromedio."',
                '".$pctvmkambiopromedio."',
                '".$dolargoldBuy."',
                '".$pctvdolargoldbuy."',
                '".$dolargoldSell."',
                '".$pctvdolargoldsell."',
                '".$dolargoldPromedio."',
                '".$pctvdolargoldpromedio."',
                '".$dolarftBuy."',
                '".$pctvdolarftbuy."',
                '".$dolarftSell."',
                '".$pctvdolarftsell."',
                '".$dolarftPromedio."',
                '".$pctvdolarftpromedio."',
                '".$dolarC."',
                '".$pctvdolarc."',
                '".$dolarV."',
                '".$pctvdolarv."',
                '".$euroC."',
                '".$pctveuroc."',
                '".$euroV."',
                '".$pctveurov."',
                '".$promediototal."',
                '".$pctvpromediototal."'
              )";

              $query = mysqli_query($link,$sql);
              // SI NO HAY ERRORES DE CONEXION
              if (!mysqli_error($link)) {
                $_SESSION['msj'] = "Datos Ingresados Correctamente.";
                mysqli_close($link);
                echo "<script>history.back();</script>";
              }else {
                $_SESSION['msj'] = "Error de Conexión.";
                mysqli_close($link);
                echo "<script>history.back();</script>";
              }

            }
          }
        }
    break;
    case 5: // MOSTRAR DATOS OTC
      include 'config/link.php';
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
    case 6: // MOSTRAR MENSAJES
      if (isset($_SESSION['msj']) && $_SESSION['msj'] != "") {
        header('Content-Type: application/json');
        echo json_encode($_SESSION['msj']);
        unset($_SESSION['msj']);
      }
    break;
    case 7: // MOSTRAR CHART1
      include 'config/link.php';
      $sql = "SELECT OFI.id, OFI.fecha, OFI.dolardicom, OTC.id, OTC.promediototal FROM datosoficiales OFI LEFT JOIN datosotc OTC ON OFI.id = OTC.id";
      $query = mysqli_query($link, $sql);
      $num = mysqli_num_rows($query);

      if ($num != 0) {

        $data = array();
        $nro = 1;

        while ($row = mysqli_fetch_assoc($query)) {
          for ($i=0; $i < count($row) ; $i++) {
            $data[$nro] = [$row['fecha'],$row['dolardicom'],$row['promediototal']];
          }
          $nro += 1;
        }

        header('Content-Type: application/json');
        echo json_encode($data);

        }else{

        }
        mysqli_close($link);
    break;
    case 8: // MOSTRAR CHART2
        include 'config/link.php';
        $sql = "SELECT OFI.id, OFI.fecha, OFI.eurodicom, OTC.id, OTC.euro FROM datosoficiales OFI LEFT JOIN datosotc OTC ON OFI.id = OTC.id";
        $query = mysqli_query($link, $sql);
        $num = mysqli_num_rows($query);

        if ($num != 0) {

          $data = array();
          $nro = 1;

          while ($row = mysqli_fetch_assoc($query)) {
            for ($i=0; $i < count($row) ; $i++) {
              // $euroOTC = floatval(str_replace(",","", $row['promediototal'])) * floatval(str_replace(",",".", $row['eurodolar']));
              $data[$nro] = [$row['fecha'],$row['eurodicom'],$row['euro']];
            }
            $nro += 1;
          }

          header('Content-Type: application/json');
          echo json_encode($data);

        }else{

        }
        mysqli_close($link);
    break;
    case 9: // MOSTRAR CHART3
      include 'config/link.php';
      $sql = "SELECT id, fecha, petroleo FROM datosoficiales";
      $query = mysqli_query($link, $sql);
      $num = mysqli_num_rows($query);

      if ($num != 0) {

        $data = array();
        $nro = 1;

        while ($row = mysqli_fetch_assoc($query)) {
          for ($i=0; $i < count($row) ; $i++) {
            $data[$nro] = [$row['fecha'],$row['petroleo']];
          }
          $nro += 1;
        }

        header('Content-Type: application/json');
        echo json_encode($data);

      }else{

      }
      mysqli_close($link);
    break;
    case 10: // MOSTRAR CHART4
      include 'config/link.php';
      $sql = "SELECT id, fecha, oropromedio FROM datosoficiales";
      $query = mysqli_query($link, $sql);
      $num = mysqli_num_rows($query);

      if ($num != 0) {

        $data = array();
        $nro = 1;

        while ($row = mysqli_fetch_assoc($query)) {
          for ($i=0; $i < count($row) ; $i++) {
            $data[$nro] = [$row['fecha'],$row['oropromedio']];
          }
          $nro += 1;
        }

        header('Content-Type: application/json');
        echo json_encode($data);

      }else{

      }
      mysqli_close($link);
    break;
    case 11: // MOSTRAR CHART5
      include 'config/link.php';
      $sql = "SELECT id, fecha, bitcoinpromedio FROM datosoficiales";
      $query = mysqli_query($link, $sql);
      $num = mysqli_num_rows($query);

      if ($num != 0) {

        $data = array();
        $nro = 1;

        while ($row = mysqli_fetch_assoc($query)) {
          for ($i=0; $i < count($row) ; $i++) {
            $data[$nro] = [$row['fecha'],$row['bitcoinpromedio']];
          }
          $nro += 1;
        }

        header('Content-Type: application/json');
        echo json_encode($data);

      }else{

      }
      mysqli_close($link);
    break;
    case 12: // INSERTAR DATOS OFI Y OTC AL MISMO TIEMPO
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

            include 'config/link.php';
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
                $_SESSION['msj'] = "Datos Ingresados Correctamente.";
              }else {
                $_SESSION['msj'] = "Error de Conexión.";
              }
            }else{
              // SEGUNDA ETAPA DE LOGICA
              $sql   = "SELECT * FROM datosoficiales ORDER BY id DESC LIMIT 1";
              $query = mysqli_query($link,$sql);

              while ($row = mysqli_fetch_assoc($query)) {

                $Adolardicom = str_replace(",","", $row['dolardicom']);
                $Aeurodicom = str_replace(",","", $row['eurodicom']);
                $Aeurodolar = str_replace(",","", $row['eurodolar']);
                $Abitcoinbuy = str_replace(",","", $row['bitcoinbuy']);
                $Abitcoinsell = str_replace(",","", $row['bitcoinsell']);
                $Abitcoinpromedio = str_replace(",","", $row['bitcoinpromedio']);
                $Apetro = str_replace(",","", $row['petro']);
                $Apetro1 = str_replace(",","", $row['petro1']);
                $Apetro2 = str_replace(",","", $row['petro2']);
                $Awti = str_replace(",","", $row['wti']);
                $Abrent = str_replace(",","", $row['brent']);
                $Apetroleo = str_replace(",","", $row['petroleo']);
                $Aorobuy = str_replace(",","", $row['orobuy']);
                $Aorosell = str_replace(",","", $row['orosell']);
                $Aoropromedio = str_replace(",","", $row['oropromedio']);


              }


              $b = str_replace(",","", $dolarDicom);
              $c = ($b - $Adolardicom);
              $pctvdolardicom = number_format($c / $b,2);

              $b2 = str_replace(",","", $euroDicom);
              $c2 = ($b2 - $Aeurodicom);
              $pctveurodicom = number_format($c2 / $b2,2);

              $b3 = str_replace(",","", $euroDolar);
              $c3 = ($b3 - $Aeurodolar);
              $pctveurodolar = number_format($c3 / $b3,2);

              $b4 = str_replace(",","", $bitcoinBuy);
              $c4 = ($b4 - $Abitcoinbuy);
              $pctvbitcoinbuy = number_format($c4 / $b4,2);

              $b5 = str_replace(",","", $bitcoinSell);
              $c5 = ($b5 - $Abitcoinsell);
              $pctvbitcoinsell = number_format($c5 / $b5,2);

              $b6 = str_replace(",","", $bitcoinPromedio);
              $c6 = ($b6 - $Abitcoinpromedio);
              $pctvbitcoinpromedio = number_format($c6 / $b6,2);

              $b7 = str_replace(",","", $petro);
              $c7 = ($b7 - $Apetro);
              $pctvpetro = number_format($c7 / $b7,2);

              $b8 = str_replace(",","", $petroSyT);
              $c8 = ($b8 - $Apetro1);
              $pctvpetro1 = number_format($c8 / $b8,2);

              $b9 = str_replace(",","", $petroPyC);
              $c9 = ($b9 - $Apetro2);
              $pctvpetro2 = number_format($c9 / $b9,2);

              $b10 = str_replace(",","", $petroleoWTI);
              $c10 = ($b10 - $Awti);
              $pctvwti = number_format($c10 / $b10,2);

              $b11 = str_replace(",","", $petroleoBRENT);
              $c11 = ($b11 - $Abrent);
              $pctvbrent = number_format($c11 / $b11,2);

              $b12 = str_replace(",","", $petroleoPromedio);
              $c12 = ($b12 - $Apetroleo);
              $pctvpetroleo = number_format($c12 / $b12,2);

              $b13 = str_replace(",","", $oroBuy);
              $c13 = ($b13 - $Aorobuy);
              $pctvorobuy = number_format($c13 / $b13,2);

              $b14 = str_replace(",","", $oroSell);
              $c14 = ($b14 - $Aorosell);
              $pctvorosell = number_format($c14 / $b14,2);

              $b15 = str_replace(",","", $oroPromedio);
              $c15 = ($b15 - $Aoropromedio);
              $pctvoropromedio = number_format($c15 / $b15,2);

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
                '".$pctvdolardicom."',
                '".$euroDicom."',
                '".$pctveurodicom."',
                '".$euroDolar."',
                '".$pctveurodolar."',
                '".$bitcoinBuy."',
                '".$pctvbitcoinbuy."',
                '".$bitcoinSell."',
                '".$pctvbitcoinsell."',
                '".$bitcoinPromedio."',
                '".$pctvbitcoinpromedio."',
                '".$petro."',
                '".$pctvpetro."',
                '".$petroSyT."',
                '".$pctvpetro1."',
                '".$petroPyC."',
                '".$pctvpetro2."',
                '".$petroleoWTI."',
                '".$pctvwti."',
                '".$petroleoBRENT."',
                '".$pctvbrent."',
                '".$petroleoPromedio."',
                '".$pctvpetroleo."',
                '".$oroBuy."',
                '".$pctvorobuy."',
                '".$oroSell."',
                '".$pctvorosell."',
                '".$oroPromedio."',
                '".$pctvoropromedio."'
              )";

              $query2 = mysqli_query($link,$sql2);

              // SI NO HAY ERRORES DE CONEXION
              if (!mysqli_error($link)) {
                $_SESSION['msj'] = "Datos Ingresados Correctamente.";
                // mysqli_close($link);
                // echo "<script>history.back();</script>";
              }else {
                $_SESSION['msj'] = "Error de Conexión.";
                // mysqli_close($link);
                // echo "<script>history.back();</script>";
              }

            }
        }else {
          echo "<script>alert('ENTRO');</script>";
        }
        // SI LLEGARON TODOS LOS DATOS
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
            $_POST['euro']                     != "" &&
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
            $euro = $_POST['euro'];
            $euroC = $_POST['euroC'];
            $euroV = $_POST['euroV'];
            $promediototal = $_POST['promedioTotal'];

            include 'config/link.php';
            $sql3 = "SELECT * FROM datosotc";
            $query3 = mysqli_query($link,$sql3);
            $num = mysqli_num_rows($query3);

            if ($num == 0) {
              $sql3 = "INSERT INTO datosotc (
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
                euro,
                pctveuro,
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
                '".$euro."',
                0,
                '".$euroV."',
                0,
                '".$promediototal."',
                0
              )";

              $query3 = mysqli_query($link,$sql3);
              // SI NO HAY ERRORES DE CONEXION
              if (!mysqli_error($link)) {
                $_SESSION['msj'] = "Datos Ingresados Correctamente.";
                mysqli_close($link);
                header('location:../cms.php');
              }else {
                $_SESSION['msj'] = "Error de Conexión.";
                mysqli_close($link);
                header('location:../cms.php');
              }

            }else{
              // SEGUNDA ETAPA DE LOGICA
              $sql4   = "SELECT * FROM datosotc ORDER BY id DESC LIMIT 1";
              $query4 = mysqli_query($link,$sql4);

              while ($row = mysqli_fetch_assoc($query4)) {

                $Adolartodaybuy = str_replace(",","", $row['dolartodaybuy']);
                $Adolartodaysell = str_replace(",","", $row['dolartodaysell']);
                $Adolartodaypromedio = str_replace(",","", $row['dolartodaypromedio']);

                $Adolartodaybtcbuy = str_replace(",","", $row['dolartodaybtcbuy']);
                $Adolartodaybtcsell = str_replace(",","", $row['dolartodaybtcsell']);
                $Adolartodaybtcpromedio = str_replace(",","", $row['dolartodaybtcpromedio']);

                $Aairtmbuy = str_replace(",","", $row['airtmbuy']);
                $Aairtmsell = str_replace(",","", $row['airtmsell']);
                $Aairtmpromedio = str_replace(",","", $row['airtmpromedio']);

                $Adolartruebuy = str_replace(",","", $row['dolartruebuy']);
                $Adolartruesell = str_replace(",","", $row['dolartruesell']);
                $Adolartruepromedio = str_replace(",","", $row['dolartruepromedio']);

                $Amonitordolarvzlabuy = str_replace(",","", $row['monitordolarvzlabuy']);
                $Amonitordolarvzlasell = str_replace(",","", $row['monitordolarvzlasell']);
                $Amonitordolarvzlapromedio = str_replace(",","", $row['monitordolarvzlapromedio']);

                $Amkambiobuy = str_replace(",","", $row['mkambiobuy']);
                $Amkambiosell = str_replace(",","", $row['mkambiosell']);
                $Amkambiopromedio = str_replace(",","", $row['mkambiopromedio']);

                $Adolargoldbuy = str_replace(",","", $row['dolargoldbuy']);
                $Adolargoldsell = str_replace(",","", $row['dolargoldsell']);
                $Adolargoldpromedio = str_replace(",","", $row['dolargoldpromedio']);

                $Adolarftbuy = str_replace(",","", $row['dolarftbuy']);
                $Adolarftsell = str_replace(",","", $row['dolarftsell']);
                $Adolarftpromedio = str_replace(",","", $row['dolarftpromedio']);

                $Adolarc = str_replace(",","", $row['dolarc']);
                $Adolarv = str_replace(",","", $row['dolarv']);

                $Aeuro = str_replace(",","", $row['euro']);
                $Aeuroc = str_replace(",","", $row['euroc']);
                $Aeurov = str_replace(",","", $row['eurov']);

                $Apromediototal = str_replace(",","", $row['promediototal']);

                $b = str_replace(",","", $dolartodayBuy);
                $c = ($b - $Adolartodaybuy);
                $pctvdolartodaybuy = number_format($c / $b,2);

                $b2 = str_replace(",","", $dolartodaySell);
                $c2 = ($b2 - $Adolartodaysell);
                $pctvdolartodaysell = number_format($c2 / $b2,2);

                $b3 = str_replace(",","", $dolartodayPromedio);
                $c3 = ($b3 - $Adolartodaypromedio);
                $pctvdolartodaypromedio = number_format($c3 / $b3,2);

                $b4 = str_replace(",","", $dolartodaybtcBuy);
                $c4 = ($b4 - $Adolartodaybtcbuy);
                $pctvdolartodaybtcbuy = number_format($c4 / $b4,2);

                $b5 = str_replace(",","", $dolartodaybtcSell);
                $c5 = ($b5 - $Adolartodaybtcsell);
                $pctvdolartodaybtcsell = number_format($c5 / $b5,2);

                $b6 = str_replace(",","", $dolartodaybtcPromedio);
                $c6 = ($b6 - $Adolartodaybtcpromedio);
                $pctvdolartodaybtcpromedio = number_format($c6 / $b6,2);

                $b7 = str_replace(",","", $monitordolarvzlaBuy);
                $c7 = ($b7 - $Amonitordolarvzlabuy);
                $pctvmonitordolarvzlabuy = number_format($c7 / $b7,2);

                $b8 = str_replace(",","", $monitordolarvzlaSell);
                $c8 = ($b8 - $Amonitordolarvzlasell);
                $pctvmonitordolarvzlasell = number_format($c8 / $b8,2);

                $b9 = str_replace(",","", $monitordolarvzlaPromedio);
                $c9 = ($b9 - $Amonitordolarvzlapromedio);
                $pctvmonitordolarvzlapromedio = number_format($c9 / $b9,2);

                $b10 = str_replace(",","", $dolartrueBuy);
                $c10 = ($b10 - $Adolartruebuy);
                $pctvdolartruebuy = number_format($c10 / $b10,2);

                $b11 = str_replace(",","", $dolartrueSell);
                $c11 = ($b11 - $Adolartruesell);
                $pctvdolartruesell = number_format($c11 / $b11,2);

                $b12 = str_replace(",","", $dolartruePromedio);
                $c12 = ($b12 - $Adolartruepromedio);
                $pctvdolartruepromedio = number_format($c12 / $b12,2);

                $b13 = str_replace(",","", $mkambioBuy);
                $c13 = ($b13 - $Amkambiobuy);
                $pctvmkambiobuy = number_format($c13 / $b13,2);

                $b14 = str_replace(",","", $mkambioSell);
                $c14 = ($b14 - $Amkambiosell);
                $pctvmkambiosell = number_format($c14 / $b14,2);

                $b15 = str_replace(",","", $mkambioPromedio);
                $c15 = ($b15 - $Amkambiopromedio);
                $pctvmkambiopromedio = number_format($c15 / $b15,2);

                $b16 = str_replace(",","", $dolargoldBuy);
                $c16 = ($b16 - $Adolargoldbuy);
                $pctvdolargoldbuy = number_format($c16 / $b16,2);

                $b17 = str_replace(",","", $dolargoldSell);
                $c17 = ($b17 - $Adolargoldsell);
                $pctvdolargoldsell = number_format($c17 / $b17,2);

                $b18 = str_replace(",","", $dolargoldPromedio);
                $c18 = ($b18 - $Adolargoldpromedio);
                $pctvdolargoldpromedio = number_format($c18 / $b18,2);

                $b19 = str_replace(",","", $dolarftBuy);
                $c19 = ($b19 - $Adolarftbuy);
                $pctvdolarftbuy = number_format($c19 / $b19,2);

                $b20 = str_replace(",","", $dolarftSell);
                $c20 = ($b20 - $Adolarftsell);
                $pctvdolarftsell = number_format($c20 / $b20,2);

                $b21 = str_replace(",","", $dolarftPromedio);
                $c21 = ($b21 - $Adolarftpromedio);
                $pctvdolarftpromedio = number_format($c21 / $b21,2);

                $b19 = str_replace(",","", $dolarC);
                $c19 = ($b19 - $Adolarc);
                $pctvdolarc = number_format($c19 / $b19,2);

                $b20 = str_replace(",","", $dolarV);
                $c20 = ($b20 - $Adolarv);
                $pctvdolarv = number_format($c20 / $b20,2);

                $b21 = str_replace(",","", $euroC);
                $c21 = ($b21 - $Aeuroc);
                $pctveuroc = number_format($c21 / $b21,2);

                $b22 = str_replace(",","", $euroV);
                $c22 = ($b22 - $Aeurov);
                $pctveurov = number_format($c22 / $b22,2);

                $b23 = str_replace(",","", $promediototal);
                $c23 = ($b23 - $Apromediototal);
                $pctvpromediototal = number_format($c23 / $b23,2);

                $b24 = str_replace(",","", $airtmBuy);
                $c24 = ($b24 - $Aairtmbuy);
                $pctvairtmbuy = number_format($c24 / $b24,2);

                $b25 = str_replace(",","", $airtmSell);
                $c25 = ($b25 - $Aairtmsell);
                $pctvairtmsell = number_format($c25 / $b25,2);

                $b26 = str_replace(",","", $airtmPromedio);
                $c26 = ($b26 - $Aairtmpromedio);
                $pctvairtmpromedio = number_format($c26 / $b26,2);

                $b27 = str_replace(",","", $euro);
                $c27 = ($b27 - $Aeuro);
                $pctveuro = number_format($c27 / $b27,2);

                $sql4 = "INSERT INTO datosotc (
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
                  euro,
                  pctveuro,
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
                  '".$pctvdolartodaybuy."',
                  '".$dolartodaySell."',
                  '".$pctvdolartodaysell."',
                  '".$dolartodayPromedio."',
                  '".$pctvdolartodaypromedio."',
                  '".$dolartodaybtcBuy."',
                  '".$pctvdolartodaybtcbuy."',
                  '".$dolartodaybtcSell."',
                  '".$pctvdolartodaybtcsell."',
                  '".$dolartodaybtcPromedio."',
                  '".$pctvdolartodaybtcpromedio."',
                  '".$airtmBuy."',
                  '".$pctvairtmbuy."',
                  '".$airtmSell."',
                  '".$pctvairtmsell."',
                  '".$airtmPromedio."',
                  '".$pctvairtmpromedio."',
                  '".$dolartrueBuy."',
                  '".$pctvdolartruebuy."',
                  '".$dolartrueSell."',
                  '".$pctvdolartruesell."',
                  '".$dolartruePromedio."',
                  '".$pctvdolartruepromedio."',
                  '".$monitordolarvzlaBuy."',
                  '".$pctvmonitordolarvzlabuy."',
                  '".$monitordolarvzlaSell."',
                  '".$pctvmonitordolarvzlasell."',
                  '".$monitordolarvzlaPromedio."',
                  '".$pctvmonitordolarvzlapromedio."',
                  '".$mkambioBuy."',
                  '".$pctvmkambiobuy."',
                  '".$mkambioSell."',
                  '".$pctvmkambiosell."',
                  '".$mkambioPromedio."',
                  '".$pctvmkambiopromedio."',
                  '".$dolargoldBuy."',
                  '".$pctvdolargoldbuy."',
                  '".$dolargoldSell."',
                  '".$pctvdolargoldsell."',
                  '".$dolargoldPromedio."',
                  '".$pctvdolargoldpromedio."',
                  '".$dolarftBuy."',
                  '".$pctvdolarftbuy."',
                  '".$dolarftSell."',
                  '".$pctvdolarftsell."',
                  '".$dolarftPromedio."',
                  '".$pctvdolarftpromedio."',
                  '".$dolarC."',
                  '".$pctvdolarc."',
                  '".$dolarV."',
                  '".$pctvdolarv."',
                  '".$euro."',
                  '".$pctveuro."',
                  '".$euroC."',
                  '".$pctveuroc."',
                  '".$euroV."',
                  '".$pctveurov."',
                  '".$promediototal."',
                  '".$pctvpromediototal."'
                )";

                $query4 = mysqli_query($link,$sql4);
                // SI NO HAY ERRORES DE CONEXION
                if (!mysqli_error($link)) {
                  $_SESSION['msj'] = "Datos Ingresados Correctamente.";
                  mysqli_close($link);
                  header('location:../cms.php');
                }else {
                  $_SESSION['msj'] = "Error de Conexión.";
                  mysqli_close($link);
                  header('location:../cms.php');
                }

              }
            }
          }
    break;
    case 13: //INSERTAR MSJ DE CHAT
      if ($_POST['msj'] != "") {
        include 'config/link.php';
        $sql   = "INSERT INTO chat (
          user,
          msj
        ) VALUES (
          '".$_SESSION["id"]."',
          '".$_POST["msj"]."'
        )";
        $query = mysqli_query($link,$sql);
        // SI NO HAY ERRORES DE CONEXION
        if (!mysqli_error($link)) {
          $_SESSION['msj'] = "Datos Ingresados Correctamente.";
          header('location:../chat.php');
          mysqli_close($link);

        }else {
          $_SESSION['msj'] = "Error de Conexión.";
          header('location:../chat.php');
          mysqli_close($link);
        }
      }else {
        $_SESSION['msj'] = "Error de Conexión.";
        echo 'no llego el msj';
        header('location:../chat.php');
      }
    break;
    case 14: //MOSTRAR MSJ DE CHAT
      include 'config/link.php';
      $sql   = "SELECT * FROM chat";
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
        header('location:../login.php');
      break;
  }

?>
