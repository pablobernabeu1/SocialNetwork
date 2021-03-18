<?php

include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";

include_once "app/ControlSesion.inc.php";
include_once "app/Redireccion.inc.php";

Conexion::abrir_conexion();
ControlSesion::cerrar_sesion();
Conexion::cerrar_conexion();

Redireccion::redirigir(SERVIDOR);
