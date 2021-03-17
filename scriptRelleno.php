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


  Conexion::cerrar_conexion();
