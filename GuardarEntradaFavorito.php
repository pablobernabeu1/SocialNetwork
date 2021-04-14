<?php
  session_start();
  include_once "app/config.inc.php";
  include_once "app/Conexion.inc.php";
  include_once "app/Redireccion.inc.php";

  include_once "app/RepositorioEntrada.inc.php";

  Conexion::abrir_conexion();

  $id_entrada = $_GET["id_entrada"];
  $id_usuario = $_SESSION["id_usuario"];

  $insertado = RepositorioEntrada::insertar_entrada_a_favoritos(Conexion::obtener_conexion(), $id_usuario, $id_entrada);

  Conexion::cerrar_conexion();

  Redireccion::redirigir(RUTA_ENTRADAS_FAVORITAS);

?>
