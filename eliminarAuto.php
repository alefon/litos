<?php
    include 'connection.php';

    $sql = " delete from autos where modelo='".$_GET["crip"]."'";
    if (mysqli_query($conn, $sql)) {
      header('Location: display.php');
  } else {
      echo "Error: " . $sql . "" . mysqli_error($conn);

  }

    mysqli_free_result($result);
    mysqli_close($conn);

 ?>
