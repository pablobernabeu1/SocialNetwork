<?php
  session_start();
  include_once "app/Conexion.inc.php";
  include_once "app/Usuario.inc.php";
  include_once "app/RepositorioUsuario.inc.php";
  include_once "app/ValidadorRegistro.inc.php";
  include_once "app/config.inc.php";
  include_once "app/Redireccion.inc.php";

  if(isset($_POST['enviar'])){
    Conexion::abrir_conexion();

    $validador = new ValidadorRegistro($_POST['email'], $_POST['nombre'], $_POST['password'], $_POST['password2'], Conexion::obtener_conexion());

    if($validador->registro_valido()){
      $usuario = new Usuario('', $validador->obtener_nombre(), $validador->obtener_email(), password_hash($validador->obtener_password(), PASSWORD_DEFAULT), '', '');
      $usuario_insertado = RepositorioUsuario::insertar_usuario(Conexion::obtener_conexion(), $usuario);

      if($usuario_insertado){
        // Redirigir a registro_correcto

        $cadena = $usuario->obtener_nombre();

        Redireccion::redirigir(RUTA_REGISTRO_CORRECTO . "?nombre=" . $cadena);

      }

    }

    Conexion::cerrar_conexion();
  }
?>

<!DOCTYPE html>
<html>
  <head>

      <title>Registrase</title>
      <?php
        include_once "plantillas/headDeclaration.inc.php";
      ?>


  </head>
  <body>

      <?php
        include "plantillas/navbar.inc.php";
      ?>

      <div class="registro-div">
        <form class="row g-3" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

          <?php
            if(isset($_POST['enviar'])){
              include_once "plantillas/registro_validado.inc.php";
            }
            else{
              include_once "plantillas/registro_vacio.inc.php";
            }
          ?>

        </form>
      </div>

      <?php
        include_once "plantillas/footerScripts.inc.php";
      ?>
  </body>
</html>
