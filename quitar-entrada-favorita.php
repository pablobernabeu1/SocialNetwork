<?php

  include_once "app/config.inc.php";
  include_once "app/Entrada.inc.php";
  include_once "app/RepositorioEntrada.inc.php";
  include_once "app/Redireccion.inc.php";
  include_once "app/Conexion.inc.php";

  include_once "plantillas/navbar.inc.php";

  if(isset($_GET["id_entrada"]) && !empty($_GET["id_entrada"])){
    $id_entrada = $_GET["id_entrada"];
  }

  if(RepositorioEntrada::quitar_entrada_de_favoritos(Conexion::obtener_conexion(), $_SESSION["id_usuario"], $id_entrada)){
    Conexion::cerrar_conexion();
    Redireccion::redirigir(RUTA_ENTRADAS_FAVORITAS);
  }
  else{
    Conexion::cerrar_conexion();
    Redireccion::redirigir(SERVIDOR);
  }



?>
