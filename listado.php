
<?php
include "connection.php";

$sql = "Select * from autos";
if ($result = mysqli_query($conn, $sql)) {
  while ($row = mysqli_fetch_assoc($result)) {
    $crip = $row["modelo"];
    echo '<tr><td>'.$row["modelo"].'</td>'.'<td>'.$row["nombre"].'</td><td>
    <a href="formulario.php?crip='.$crip.'">Editar</a></td><td><a href="eliminarAuto.php?crip='.$crip.'">Eliminar</a></td></tr>';
  }
  $result->free();
}

mysqli_free_result($result);
mysqli_close($conn);
 ?>
