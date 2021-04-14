<?php
  session_start();
  include_once "app/RepositorioUsuario.inc.php";
  include_once "app/Usuario.inc.php";
  include_once "app/Conexion.inc.php";

  Conexion::abrir_conexion();

  //Conseguimos el usuario que ha iniciado sesión
  $usuario = RepositorioUsuario::obtener_usuario_por_id(Conexion::obtener_conexion(), $_SESSION["id_usuario"]);

  //Asignamos su email como destinatario
  $destinatario = $usuario->obtener_email(); // correo al cual enviar el email

  $email = "pablorace1@gmail.com"; // Guardamos el correo desde el cual enviar el email

  $nombre = $_SESSION["nombre_usuario"];
  $asunto = "Compra de productos.";
  $mensaje = "Gracias por realizar la compra de los productos.";  // Y guardamos la informacion del correo


  $header = "From: pablorace1@gmail.com";
  $mensaje_completo = $mensaje . "\nAtentamente: Pablo Bernabeu";

  mail($destinatario, $asunto, $mensaje_completo, $header);
  echo "<script></script>";
  echo "<script></script>";


  Conexion::cerrar_conexion();

?>
