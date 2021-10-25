<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-08-02</title>
  </head>
  <body>
        <?php
          $media = ($_POST['nota1'] + $_POST['nota2'] + $_POST['nota3']) / 3;
          echo "La nota media es ";
          echo round($media, $precision = 2);
          echo ", en el boletín tiene un ";

          if ($media < 5) {
            echo "Insuficiente.";
          }

          elseif (($media >= 5) && ($media < 6)) {
            echo  "Suficiente.";
          }

          elseif (($media >= 6) && ($media < 7)) {
            echo  "Bien.";
          }

          elseif (($media >= 7) && ($media < 9)) {
            echo  "Notable.";
          }

          elseif ($media >= 9) {
            echo  "Sobresaliente.";
          }
        ?>
        <br><br>
        <a href="08-01.php">>> Volver</a>
  </body>
</html>
