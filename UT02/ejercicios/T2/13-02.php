<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-13-02</title>
  </head>
  <body>
        <?php

          $a = $_POST['a'];
          $b = $_POST['b'];
          $c = $_POST['c'];

          // ordenación de los dos primeros números
          if ($a < $b) {
            $aux = $a;
            $a = $b;
            $b = $aux;
          }

          // ordenación de los dos últimos números
          if ($b < $c) {
            $aux = $b;
            $b = $c;
            $c = $aux;
          }

          // se vuelven a ordenar los dos primeros
          if ($a < $b) {
            $aux = $a;
            $a = $b;
            $b = $aux;
          }

          echo "Los números introducidos ordenados de mayor a menor son $a, $b y $c.";

        ?>
        <br><br>
        <a href="13-01.php">>> Volver</a>
  </body>
</html>
