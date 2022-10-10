<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Solución Propuesta (III)</title>
  </head>
  <body>
    <table>
      <tbody>
         <tr>
              <th>Variable</th>
              <th>Valor</th>
         </tr>
         <?php
            foreach ($_SERVER as $variable => $valor) {
              print "<tr>";
              print "<td>".$variable."</td>";
              print "<td>".$valor."</td>";
              print "</tr>";
            }
          ?>
      </tbody>
    </table>
  </body>
</html>