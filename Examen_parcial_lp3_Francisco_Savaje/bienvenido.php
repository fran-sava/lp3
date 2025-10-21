<?php /* bienvenido.php — basado en php/recibir_con_post.php*/ ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido</title>
</head>
<body>
<?php
  if(isset($_POST['nombre'])){
      $nombre = $_POST['nombre'];
  }else{
      $nombre = '';
  }
?>
  <h1><?php echo 'Bienvenido ' . htmlspecialchars($nombre); ?></h1>
  <p><a href="index.html">Volver al inicio</a></p>
</body>
</html>
