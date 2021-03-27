<?php

  include_once "app/Conexion.inc.php";
  include_once "app/EscritorEntradas.inc.php";

  $var = $_GET["var"];
?>

<!DOCTYPE html>
<html>

  <head>
    <title>Perfil</title>
    <?php
      include_once "plantillas/headDeclaration.inc.php";
    ?>
  </head>
  <body>
    <?php
      include_once "plantillas/navbar.inc.php";
    ?>


    <?php
      include_once "plantillas/panel_control_declaration.inc.php";
    ?>
    <?php
      switch ($var) {
        case "generico":
          include_once "app/gestor-generico.inc.php";
          break;

        case "entradas":
          include_once "app/gestor-entradas.inc.php";
          break;

        case "comentarios":
          include_once "app/gestor-comentarios.inc.php";
          break;

        case "favoritos":
          include_once "app/gestor-favoritos.inc.php";
          break;
      }

    ?>
    <?php
      include_once "plantillas/panel_control_cierre.inc.php";
    ?>


    <?php
      include_once "plantillas/footerScripts.inc.php";
    ?>
  </body>
</html>
