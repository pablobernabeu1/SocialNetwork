<?php
  include_once "app/Conexion.inc.php";
  include_once "app/EscritorEntradas.inc.php";
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Contacto</title>
    <?php
      include_once "plantillas/headDeclaration.inc.php";
    ?>
  </head>
  <body>

    <?php
      include_once "plantillas/navbar.inc.php";
    ?>

    <div class="div-contacto">
      <h1 class="h1-contacto">
        Contact us
      </h1>

      <div align="center">
        <a href="https://www.instagram.com/pablobernabeu_/?hl=es"><img src="logo/logo-ins.png" class="logo-ins" alt="alt"/></a>
      </div>
      <br>
      <div align="center">
        <a href="https://twitter.com/pablobernabeuu"><img src="logo/logo-twt.png" class="logo-ins" alt="alt"/></a>
      </div>
    </div>

    <?php
      include_once "plantillas/footerScripts.inc.php";
    ?>

  </body>
</html>
