<?php

  include_once "app/Conexion.inc.php";
  include_once "app/EscritorEntradas.inc.php";
  include_once "app/RepositorioEntrada.inc.php";
  include_once "app/RepositorioComentario.inc.php";

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

        case "entradas":

          include_once "plantillas/gestor-entradas.inc.php";
          break;

        case "comentarios":
          include_once "plantillas/gestor-comentarios.inc.php";
          break;

        case "favoritos":
          include_once "plantillas/gestor-favoritos.inc.php";
          break;

        default:
          $entradas_activas = RepositorioEntrada::contar_entradas_activas(Conexion::obtener_conexion(), $_SESSION["id_usuario"]);
          $borradores = RepositorioEntrada::contar_borradores(Conexion::obtener_conexion(), $_SESSION["id_usuario"]);
          $comentarios_escritos = RepositorioComentario::contar_comentarios(Conexion::obtener_conexion(), $_SESSION["id_usuario"]);

          include_once "plantillas/gestor-generico.inc.php";
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
