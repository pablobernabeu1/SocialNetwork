<?php
  session_start();
  include_once "app/config.inc.php";
  include_once "app/ControlSesion.inc.php";
  include_once "app/Redireccion.inc.php";

  ControlSesion::cerrar_sesion();

  Redireccion::redirigir(SERVIDOR);
