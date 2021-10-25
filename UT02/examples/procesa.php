<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>Código de "procesa.php"</title>
     </head>
     <body>
<?php
     print_r($_GET);
     $nombre = $_GET['nombre'];
     $modulos = $_GET['modulos'];
     print "Nombre: ".$nombre."<br />";
     foreach ($modulos as $modulo) {
          print "Modulo: ".$modulo."<br />";
     }
?>
     </body>
</html>
