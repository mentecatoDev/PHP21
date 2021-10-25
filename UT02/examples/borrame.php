<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>Solución propuesta V</title>
     </head>
     <body>
        <form name="input" action="./procesa.php" method="get">
            Nombre del alumno: <input type="text" name="nombre" /><br />
            <p>Ciclos que cursa:</p>
            <input type="checkbox" name="modulos[]" value="DWES" /> Desarrollo web en entorno servidor<br />
            <input type="checkbox" name="modulos[]" value="DWEC" /> Desarrollo web en entorno cliente<br />
            <br />
            <input type="submit" value="Enviar" />
        </form>
     </body>
</html>
