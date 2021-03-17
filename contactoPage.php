<?php
  include_once "app/Conexion.inc.php";
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Contacto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="logo/logo_small_icon_only_inverted.png"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css?v=<?php echo time(); ?>" />
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
