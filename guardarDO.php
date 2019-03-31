<?php
  error_reporting(E_ERROR);
  // DATA TIME
  $fecha = $_POST['fechaDO'];
  $hora = $_POST['horaDO'];
  // DICOM
  $dolarDicom = $_POST['dolarDICOM'];
  $euroDicom = $_POST['euroDICOM'];
  // EURO|DOLAR
  $euroDolar = $_POST['euroDolar'];
  // BITCOIN (BTC)
  $bitcoinBuy = $_POST['bitcoinBuy'];
  $bitcoinSell = $_POST['bitcoinSell'];
  $bitcoinPromedio = $_POST['bitcoinPromedio'];
  // PETRO
  $petro = $_POST['petro'];
  $petroSyT = $_POST['petro1'];
  $petroPyC = $_POST['petro2'];
  // PETROLEO
  $petroleoWTI = $_POST['wti'];
  $petroleoBRENT = $_POST['brent'];
  $petroleoPromedio = $_POST['petroleo'];
  // ORO
  $oroBuy = $_POST['oroBuy'];
  $oroSell = $_POST['oroSell'];
  $oroPromedio = $_POST['oroPromedio'];

  if ($fecha            != "" &&
      $hora             != "" &&
      $dolarDicom       != "" &&
      $euroDicom        != "" &&
      $euroDolar        != "" &&
      $bitcoinBuy       != "" &&
      $bitcoinSell      != "" &&
      $bitcoinPromedio  != "" &&
      $petro            != "" &&
      $petroSyT         != "" &&
      $petroPyC         != "" &&
      $petroleoWTI      != "" &&
      $petroleoBRENT    != "" &&
      $petroleoPromedio != "" &&
      $oroBuy           != "" &&
      $oroSell          != "" &&
      $oroPromedio      != "" ) {

    echo "ENTRO <br><br>";
    echo "fecha: ".$fecha."<br><br>";
    echo "hora: ".$hora."<br><br>";
    echo "dolarDICOM: ".$dolarDicom."<br><br>";
    echo "euroDICOM: ".$euroDicom."<br><br>";
    echo "euroDolar: ".$euroDolar."<br><br>";
    echo "bitcoinBuy: ".$bitcoinBuy."<br><br>";
    echo "bitcoinSell: ".$bitcoinSell."<br><br>";
    echo "bitcoinPromedio: ".$bitcoinPromedio."<br><br>";
    echo "petro: ".$petro."<br><br>";
    echo "petro1: ".$petroSyT."<br><br>";
    echo "petro2: ".$petroPyC."<br><br>";
    echo "wti: ".$petroleoWTI."<br><br>";
    echo "brent: ".$petroleoBRENT."<br><br>";
    echo "petroleo: ".$petroleoPromedio."<br><br>";
    echo "oroBuy: ".$oroBuy."<br><br>";
    echo "oroSell: ".$oroSell."<br><br>";
    echo "oroPromedio: ".$oroPromedio."<br><br>";

  }else{
    header('location:cms.php');
    // echo "<script>history.back();</script>";
  }


 ?>
