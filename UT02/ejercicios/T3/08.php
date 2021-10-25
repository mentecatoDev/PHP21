<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>08-01</title>
  </head>
  <body>
    <?php if (!isset($_POST['n'])): ?>
        Por favor, introduzca un número del 0 al 10:
        <form action="08.php" method="post">
          <input type="number" name="n" min="0" max="10"><br>
          <input type="submit" value="Aceptar">
        </form>
    <?php else: ?>
        <table>
          <?php
            $n = $_POST['n'];
            echo "Tabla del $n<br><br>";
            for ($i = 0; $i < 11; $i++) {
              echo "<tr><td>$n x $i = ".$n*$i."</td></tr>";
            }
          ?>
        </table>
  <?php endif; ?>
  </body>
</html>
