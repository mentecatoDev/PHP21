<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>25.php</title>
  </head>
  <body>
      <?php
        if (!isset($_POST['n'])){
        ?>
        Por favor, introduzca un número entero:
        <form action="25.php" method="post">
          <input type="number" name="n" autofocus="" required=""><br>
          <input type="submit" value="Aceptar">
        </form>
        <?php
        } else {
          $n = $_POST['n'];
          $volteado = 0;

          $numero = abs($n);

          while ($numero > 0) {
            $volteado = ($volteado * 10) + ($numero % 10);
            $numero = floor($numero / 10);
          } // while
          if ($n <0){
            $volteado = -$volteado;
          }
          echo "Si le damos la vuelta al $n tenemos el $volteado";
        }
        ?>
        <br><br>
        <a href="25.php">>> Volver</a>
  </body>
</html>
