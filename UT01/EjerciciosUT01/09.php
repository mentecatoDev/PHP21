<!DOCTYPE html>
  <!--
    Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar almacenada en una variable.
  -->

<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 08</title>
  </head>
  <body>
    <?php
      $pesetas = 50000;
      $eurosPorPeseta = 1/166.386;
      echo $pesetas.' pesetas son '.$pesetas*$eurosPorPeseta.'€';
    ?>
</body>
</html>