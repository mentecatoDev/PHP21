<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>10.php</title>
  </head>
  <body>
        Este programa calcula la media de los números positivos introducidos.<br>
        Vaya introduciendo números (puede parar introduciendo un número negativo).<br>
        <?php
        if (!isset($_POST['n'])) {
          $n = 0;
          $total = 0;
          $cuentaNumeros = 0;
        } else {
          $n = $_POST['n'];
          $total = $_POST['total'];
          if ($n <= 0){
            $cuentaNumeros = $_POST['cuentaNumeros'] - 1;
          } else {
            $cuentaNumeros = $_POST['cuentaNumeros'];
          }
      }
        if ($n >= 0) {
            $total += $n;
            $cuentaNumeros++;
            ?>
            <form action="10.php" method="post">
              <input type="number" name="n" autofocus>
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
            <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
          
            if ($cuentaNumeros == 0){
              echo '<br><br>No hay números suficientes';
            }else{?>
            <br><br>La media de los números introducidos es <?php echo $total / $cuentaNumeros; ?>
            <?php } ?>
            <br><br>
            
            <a href="10.php">>> Volver</a>
          <?php
          }
        ?>
    </body>
</html>
