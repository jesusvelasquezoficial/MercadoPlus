<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio</title>
  </head>
  <body>
    <div class="" align="center">
      <h1>Ejercicio</h1>
      <h2>X = -B +- (B x B) - (4 x A x C) / 2 x A</h2>
      <form class="" method="post">
        <h4>Datos:</h4>
        A = <input type="number" name="var1" value=""><br><br>
        B = <input type="number" name="var2" value=""><br><br>
        C = <input type="number" name="var3" value=""><br><br>
        <input type="submit" value="Enviar">
      </form>
    </div>
    <br><br>
    <div class="" align="center">
      <h2>
      <?php
        error_reporting(E_ERROR);
        if (isset($_POST[var1]) && $_POST[var1] != '' &&
            isset($_POST[var2]) && $_POST[var2] != '' &&
            isset($_POST[var3]) && $_POST[var2] != '') {

            $A = $_POST[var1];
            $B = $_POST[var2];
            $C = $_POST[var3];

            echo 'X = -'.$B.' +- ('.$B.' x '.$B.') - (4 x '.$A.' x '.$C.') / 2 x '.$A;

            if (!$A == 0) {
              $result = ($B * $B) - ((4 * $A) * $C);
              if ($result < 0) {
                echo "<br><br>No existe raiz negativa";
              }else {
                $raiz = sqrt($result);
                $x1 = (- $B + $raiz) / (2 * $A);
                $x2 = (- $B - $raiz) / (2 * $A);
                echo "<br><br>";
                echo "X1 = ".$x1."<br>";
                echo "X2 = ".$x2;
              }
            }else{
              echo "<br><br>No se puede dividir entre 0";
            }

          }
        ?>
      </h2>
    </div>
  </body>
</html>
