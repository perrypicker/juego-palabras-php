<!DOCTYPE html>
<html lang="sp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Juego Palabras</title>
</head>

<body>
  <form action="resultados.php" method="POST">

    <?php

    $palabras = ["sol", "luna", "cielo", "tierra", "mar", "aire", "agua"];

    session_start();
    $_SESSION["palabras"] = $palabras;

    foreach ($palabras as $palabra) {
      $nuevaPalabra = str_shuffle($palabra);
    ?>
      <label><?php echo $nuevaPalabra ?></label>
      <input type="text" name="palabraIngresada<?php echo array_search($palabra, $palabras); ?>"><br><br>

    <?php
    }
    ?>

    <button type="submit">Listo</button>

  </form>
</body>

</html>