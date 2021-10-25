<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-02-02</title>
  </head>
  <body>
        <?php
          $hora = $_POST['hora'];
          if (($hora >= 24) || ($hora < 0)) {
            echo "La hora introducida no es correcta.";
          } elseif (($hora >= 6) && ($hora <= 11)) {
            echo "Buenos días";
          } elseif (($hora >= 12) && ($hora <= 20)) {
            echo "Buenas tardes";
          } elseif ((($hora >= 21) && ($hora < 24)) || (($hora <= 5) && ($hora >= 0))) {
            echo "Buenas noches";
          }

        ?>
        <br><br>
        <a href="02-01.php">>> Volver</a>
  </body>
</html>
