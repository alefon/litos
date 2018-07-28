<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar un nuevo auto</title>
  </head>
  <body>

<?php


              if ($_GET["crip"] != "") {
                $decrip = $_GET["crip"];
                echo "<form class='' action='editarAuto.php' method='post'>";
                echo "<label for='modelo'>Modelo</label>";
                echo "<input type='number' name='modelo' value=".$decrip." required >";


              }else {
                echo "<form class='' action='editarAuto.php' method='post'>";
                echo "<label for='modelo'>Modelo</label>";
                echo "<input type='number' name='modelo' value='' required>";
              }

           ?>
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" value="" reqired>
          <input type="submit" name="" value="Guardar">
      </form>
  </body>
</html>
