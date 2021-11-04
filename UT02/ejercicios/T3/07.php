<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>07</title>
  </head>
  <body>
        <?php
          if (!isset($_POST['oportunidades'])) {
            $numeroIntroducido = 55555;
            $oportunidades = 3;
          } else {
            $oportunidades = $_POST['oportunidades'];
            $numeroIntroducido = $_POST['numeroIntroducido'];
          }

          $numeroSecreto = 1234;

          if ($numeroIntroducido == $numeroSecreto) {
            echo "La caja fuerte se ha abierto.<br>";
            echo '<img src="http://www.imagenesanimadas.net/Economia/Cajas-fuertes/Caja-fuerte-03.gif"';
            echo "Lo siento, has agotado todas tus oportunidades. La caja fuerte permanecerá cerrada.";
          } else {
            echo "Te quedan ", $oportunidades, " oportunidades para abrir la caja fuerte.<br>";
            $oportunidades--;
            echo "Introduce un número de cuatro cifras.";
            echo '<form action="07.php" method="post">';
            echo '<input type="number" min=0 max=9999 name="numeroIntroducido" autofocus>';
            echo '<input type="hidden" name="oportunidades" value="', $oportunidades, '">';
            echo '<input type="submit" value="Continuar">';
            echo '</form>';
          }
        ?>
  </body>
</html>
