<?php include 'login/db.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Subtitulo</title>
  </head>
  <body>
  <header>
    <a href="index.html">SUBTITULOS</a>
  </header>
  <div class="contenedor_body">
    <div class="formulario">
  <form action="validar.php" method="post">
<h1>LOGUEATE</h1>
<p><br><input type="text" class="log" placeholder="USUARIO" name="usuario" value=""></p>
<p><br><input type="password" class="log" placeholder="CONTRASEÑA" name="contraseña" value=""></p>
<input type="submit" class="log boton" placeholder="SEND" name="ingresar" value="">
  </form>
  </div>
    </div>

  </body>
</html>
