<!DOCTYPE html>
  <!--
    Escribe un programa que utilice las variables $x y $y. Asignales los valores 144 y 999 respectivamente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división y la multiplicación.
  -->

<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 05</title>
  </head>
  <body>
    <?php
      $x = 144;
      $y = 999;
    ?>
    <p>
      El valor de $x es: <?php echo $x; ?><br>
      El valor de $y es: <?php echo $y; ?><br>
      El valor de $x + $y es: <?php echo $x + $y ?><br>
      El valor de $x - $y es: <?php echo $x - $y ?><br>
      El valor de $x / $y es: <?php echo $x / $y ?><br>
      El valor de $x x $y es: <?php echo $x * $y ?><br>
  </body>
</html>