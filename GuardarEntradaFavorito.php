<?php

  include_once "app/config.inc.php";
  include_once "app/Conexion.inc.php";
  include_once "app/Redireccion.inc.php";

  include_once "app/RepositorioEntrada.inc.php";
  include_once "plantillas/navbar.inc.php";

  Conexion::abrir_conexion();

  $id_entrada = $_GET["id_entrada"];
  $id_usuario = $_SESSION["id_usuario"];

  echo "Usuario: " . $id_usuario . "<br>";
  echo "Entrada: " . $id_entrada . "<br>";

  $insertado = RepositorioEntrada::insertar_entrada_a_favoritos(Conexion::obtener_conexion(), $id_usuario, $id_entrada);

  Redireccion::redirigir(SERVIDOR);

  Conexion::cerrar_conexion();


?>
