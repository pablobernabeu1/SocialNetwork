<?php

include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/Redireccion.inc.php";

include_once "app/Entrada.inc.php";
include_once "app/RepositorioEntrada.inc.php";

Conexion::abrir_conexion();

if(isset($_GET["url"]) && !empty($_GET["url"])){
  $url_entrada = $_GET["url"];
}
else{
  Redireccion::redirigir(SERVIDOR);
}

$entrada = RepositorioEntrada::obtener_entrada_por_url(Conexion::obtener_conexion(), $url_entrada);
Conexion::cerrar_conexion();

?>

<!DOCTYPE html>
<html>

  <head>
    <?php
      include_once "plantillas/headDeclaration.inc.php";
    ?>
  </head>
  <body>
    <?php
      include_once "plantillas/navbar.inc.php";
    ?>

    <?php
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo $entrada->obtener_titulo();
      echo "<br>";
      echo $entrada->obtener_texto();
    ?>

    <?php
      include_once "plantillas/footerScripts.inc.php";
    ?>
  </body>
</html>
