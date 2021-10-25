<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>T2-14-01</title>
    <link href="default.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
        <?php
          $n = $_POST['n'];

          if ($n % 2) {
            echo "El número introducido es impar";
          } else {
            echo "El número introducido es par";
          }

          if ($n % 5) {
            echo " y no es divisible entre 5.";
          } else {
            echo " y divisible entre 5.";
          }
        ?>
        <br><br>
        <a href="14-01.php">>> Volver</a>
  </body>
</html>
