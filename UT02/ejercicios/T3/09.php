<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>09.php</title>
  </head>
  <body>
    <?php if (!isset($_POST["n"])): ?>
        Introduzca un número entero y le diré cuántos dígitos tiene:
        <form action="09.php" method="post">
          <input type="number" name="n" autofocus>
          <input type="submit" value="Aceptar">
        </form>
    <?php else: ?>
        <?php
          $n = $_POST['n'];

          $numeroIntroducido = $n;
          $numeroDeDigitos = 1;

          while ($n > 9) {
            $n = floor($n / 10);
            $numeroDeDigitos++;
            }

          echo "$numeroIntroducido tiene $numeroDeDigitos dígito/s.";
          ?>
        <br><br>
        <a href="09.php">>> Volver</a>

    <?php endif; ?>
  </body>
</html>
