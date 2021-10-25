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
      $euros = 300;
      $pesetasPorEuro = 166.386;
      echo $euros.'€ son '.$euros*$pesetasPorEuro.' pesetas';
    ?>
</body>
</html>