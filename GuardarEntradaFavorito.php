<?php

  include_once "app/config.inc.php";
  include_once "app/Conexion.inc.php";
  include_once "app/Redireccion.inc.php";

  include_once "app/RepositorioEntrada.inc.php";

  Conexion::abrir_conexion();

  if(isset($_GET["id_entrada"]) && !empty($_GET["id_entrada"])){
    $id_entrada = $_GET["id_entrada"];
  }
  else{
    Redireccion::redirigir(SERVIDOR);
  }

  if(isset($_GET["id_usuario"]) && !empty($_GET["id_usuario"])){
    $id_usuario = $_GET["id_usuario"];
  }
  else{
    Redireccion::redirigir(SERVIDOR);
  }

  echo "Usuario: " . $id_usuario . "<br>";
  echo "Entrada: " . $id_entrada . "<br>";

  $insertado = RepositorioEntrada::insertar_entrada_a_favoritos(Conexion::obtener_conexion(), $id_usuario, $id_entrada);

  if($insertado){
    echo "Hola";
  }
  else{
    echo "Adios";
  }

  Conexion::cerrar_conexion();

  Redireccion::redirigir(SERVIDOR);

?>
