<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado de autos</title>
  </head>
  <body>
    <a href="formulario.php">Agregar autos</a>
    <table>
      <tr>
        <th>Modelo</th>
        <th>Nombre</th>
        <th>Acciones</th>
      </tr>
      <?php
        include "listado.php"
        ?>
    </table>

  </body>
</html>
