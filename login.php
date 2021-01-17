<?php
include 'conect.php';
if (isset($conex)) {

  $id = NULL;
  $user=trim($_POST['usuario']);
  $password=trim($_POST ['contraseña']);
  $email=trim($_POST['email']);
  $submit=$_POST['ingresar'];


  if ($user == NULL) {echo '
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <title>Subti</title>
      </head>
      <body>

        <header>
          <a href="index.html">SUBTITULOS</a>
          <nav>
            <a href="signin.html"><?php $user ?></a>
          </nav>
        </header>

    <div class="contenedor_body">
      <h2>El USER ESTA VACIO</h2>
      <p>el usuario esta vacio la concha de tu madre forro hijo de puta esta void esta clean esta NULL</p>
        </div>
      </body>
    </html>' ;}
  if ($password == NULL) {echo '
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta charset="utf-8">
          <link rel="stylesheet" href="css/style.css" type="text/css">
          <title>Subti</title>
        </head>
        <body>

          <header>
            <a href="index.html">SUBTITULOS</a>
            <nav>
              <a href="signin.html"><?php $user ?></a>
            </nav>
          </header>

      <div class="contenedor_body">
        <h2>LA CONTRASEÑA ESTA VACIA CULIADO FEO</h2>
        <p>pajero de mierda pone una contraseña como la gente
        </p>
          </div>
        </body>
      </html>' ;}
  if ($email == NULL) {echo '
        <!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="utf-8">
            <link rel="stylesheet" href="css/style.css" type="text/css">
            <title>Subti</title>
          </head>
          <body>

            <header>
              <a href="index.html">SUBTITULOS</a>
              <nav>
                <a href="signin.html"><?php $user ?></a>
              </nav>
            </header>

        <div class="contenedor_body">
          <h2>EL EMAIL ESTA VACIO ESTA VOID</h2>
          <p>dale flaco media pila completame todos los campos</p>
            </div>
          </body>
        </html>' ;}
  if (($user != NULL)&&($password != NULL)&&($email != NULL)) {
          $cadena="INSERT INTO `users`  (`id`, `name`, `pass`, `email`) VALUES ('$id','$user','$password','$email')";
          $resultado= mysqli_query($conex,$cadena);

          if ($resultado) {echo '
            <!DOCTYPE html>
            <html lang="en" dir="ltr">
              <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta charset="utf-8">
                <link rel="stylesheet" href="css/style.css" type="text/css">
                <title>Subti</title>
              </head>
              <body>

                <header>
                  <a href="index.html">SUBTITULOS</a>
                  <nav>
                    <a href="signin.html">< '.$user.' </a>
                  </nav>
                </header>

            <div class="contenedor_body">
              <h2>Revisa tu casilla de coreo</h2>
              <p>Hemos enviado un correo para verificar tu correo electronico, por favor, entra al link que te enviamos</p>
              <h2>Angel AYUDA</h2>
              <p>este php de mierda solo pude meter este html como una cadena de strings</p>
                </div>
              </body>
            </html>' ;}

                                                              }
        else { echo
          '<!DOCTYPE html>
          <html lang="en" dir="ltr">
            <head>
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <meta charset="utf-8">
              <link rel="stylesheet" href="css/style.css" type="text/css">
              <title>Subti</title>
            </head>
            <body>

              <header>
                <a href="index.html">SUBTITULOS</a>
                <nav>
                  <a href="signin.html"><?php $user ?></a>
                </nav>
              </header>

          <div class="contenedor_body">
            <h2>La conexion no fue establecida</h2>
            <p>verifica la conexion con la base de datos</p>
              </div>
            </body>
          </html>';}




                                                                      }

?>
