<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>06.php</title>
  </head>
  <body>
    <?php

      if (!isset($_GET['n'])) {
        $contadorNumeros = 0;
        $numeroTexto = '';
        $n = '';
      } else {
        $contadorNumeros = $_GET['contadorNumeros'];
        $numeroTexto = $_GET['numeroTexto'];
        $n = $_GET['n'];
        $numeroTexto = $numeroTexto.' '.$n;
        $contadorNumeros++;
      }

      if ($contadorNumeros < 8) {
        //$contadorNumeros = $_GET['contadorNumeros'];
        //$numeroTexto = $_GET['numeroTexto'];
        ?>
        <form action="06.php" method="get">
          Introduzca un número:
          <input type="number" name ="n" autofocus="" required="">
          <input type="hidden" name="contadorNumeros" value="<?= $contadorNumeros; ?>">
          <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
          <input type="submit" value="OK">
        </form>
        <?php
      }else{

      ////////////////////////////////////////////////////////////////
      //  Programa principal una vez recogidos los datos del array.
      //  El array con los números es $numero
      ////////////////////////////////////////////////////////////////

        $numero = explode(" ", substr($numeroTexto,1));

        foreach ($numero as $n) {
          if ($n % 2 == 0) {
            echo "<span style=\"color: magenta;\">$n&nbsp;</span>";
          } else {
            echo "<span style=\"color: green;\">$n&nbsp;</span>";
          }
        }

        echo "<span style=\"color: magenta;\"><br>pares<br></span>";
        echo "<span style=\"color: green;\">impares</span>";
        ?>
        <br><br>
        <a href="06.php">>> Volver</a>
        <?php
      }
      ?>
  </body>
</html>
