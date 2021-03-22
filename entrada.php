<?php

include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";

include_once "app/Usuario.inc.php";
include_once "app/Entrada.inc.php";
include_once "app/Comentario.inc.php";

include_once "app/RepositorioUsuario.inc.php";
include_once "app/RepositorioEntrada.inc.php";
include_once "app/RepositorioComentario.inc.php";

Conexion::abrir_conexion();

if(isset($_GET["url"]) && !empty($_GET["url"])){
  $url_entrada = $_GET["url"];
}

$entrada = RepositorioEntrada::obtener_entrada_por_url(Conexion::obtener_conexion(), $url_entrada);

Conexion::cerrar_conexion();

echo $entrada->obtener_titulo();
echo "<br>";
echo $entrada->obtener_texto();
