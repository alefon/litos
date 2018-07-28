<?php
    include 'connection.php';
    $modelo =  $_POST['modelo'];
    $nombre = $_POST['nombre'];
    $sql = "insert into autos(modelo,nombre) values ('".$modelo."','".$nombre."')";
    if (mysqli_query($conn, $sql)) {
      header('Location: display.php');
  } else {
      echo "Error: " . $sql . "" . mysqli_error($conn);
  }

    mysqli_free_result($result);
    mysqli_close($conn);

 ?>
