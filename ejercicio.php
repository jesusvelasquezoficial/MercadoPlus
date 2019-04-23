<?php
// echo "Inicio <br><br>";
// echo "Leyendo variables Vc, Vr, T <br><br>";
// $Vc = 8;
// $Vr = 7;
// $t = 0;
// echo "Si T es igual a 0 entonces <br><br>";
// if ($t <= 0) {
//   echo "a T se le suma 1 <br><br>";
//   $t = $t + 1;
// }
//
// echo "Mientras T sea mayor a 0 Y menor O igual a 1 entonces <br><br>";
// while ($t > 0 AND $t != 5) {
//   echo "Procesando.. <br><br>";
//   $Vcr = $Vc - $Vr;
//   $D = $Vcr / $t;
//   echo "Muestra T = ".$t." <br><br>";
//   echo "Muestra Resultado = ".($D)." <br><br>";
//   echo "a T se le suma 1 <br><br>";
//   $t += 1;
//   echo "Finaliza While <br><br>";
// }
// echo "Fin";

echo "Inicio <br>";
echo "Leyendo variables Vc, Vr, T <br><br>";
$Vc = 10;
echo "<strong>Vc</strong> es <strong>".$Vc."</strong> <br>";
$Vr = 2;
echo "<strong>Vr</strong> es <strong>".$Vr."</strong> <br>";
$t = 1;
echo "<strong>T</strong> es <strong>".$t."</strong> <br><br>";

// if ($t == 0) {
  echo "<strong>SI</strong> <strong>T(".$t.")</strong> es <strong> == </strong> a <strong>0</strong> entonces <br>";
  echo "  ->ERROR: <strong>T</strong> es <strong>0</strong> <br><br>";
// }elseif($t > 0){
  echo "<strong>SINO SI</strong> <strong>T(".$t.")</strong> es <strong> > </strong> a <strong>0</strong> entonces <br><br>";
  echo "<strong>R</strong> = <strong>Vc(".$Vc.")</strong> - <strong>Vr(".$Vr.")</strong> <br>";
  $Vcr = $Vc - $Vr;
  echo "<strong>R(".$Vcr.")</strong> / <strong>T(".$t.")</strong> <br>";
  $D = $Vcr / $t;
  echo "Result: <strong>".$D."</strong> <br><br>";
// }else{
  echo "<strong>SINO</strong><br>";
  echo "  ->ERROR: <strong>T</strong> no es <strong>0</strong> y tampoco es <strong> > </strong> a <strong>0</strong> <br><br>";
// }

echo "Fin";


?>
