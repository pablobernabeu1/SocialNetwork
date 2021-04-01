<?php

  include_once "app/config.inc.php";
  include_once "app/Conexion.inc.php";
  include_once "app/Redireccion.inc.php";

  include_once "app/Entrada.inc.php";
  include_once "app/Comentario.inc.php";
  include_once "app/RepositorioEntrada.inc.php";
  include_once "app/RepositorioUsuario.inc.php";
  include_once "app/RepositorioComentario.inc.php";

  Conexion::abrir_conexion();

  if(isset($_GET["url"]) && !empty($_GET["url"])){
    $url_entrada = $_GET["url"];
  }
  else{
    Redireccion::redirigir(SERVIDOR);
  }

  $entrada = RepositorioEntrada::obtener_entrada_por_url(Conexion::obtener_conexion(), $url_entrada);
  $id_entrada = $entrada->obtener_id();
  Conexion::cerrar_conexion();

?>

<!DOCTYPE html>
<html>

  <head>
    <title>Entrada <?php echo $id_entrada ?></title>
    <?php
      include_once "plantillas/headDeclaration.inc.php";
    ?>
  </head>
  <body>
    <?php
      include_once "plantillas/navbar.inc.php";
    ?>


    <div class="container">
      <div class="row dejar-espacio-entrada">
        <div class="col-md-12">
          <div>
            <div class="titulo-entrada-v2">
              <h3>
                <strong>
                  <?php
                    echo $entrada->obtener_titulo();
                  ?>
                </strong>
              </h3>
            </div>
            <div class="entrada-usuario">
              <?php
                $autor = RepositorioUsuario::obtener_usuario_por_id(Conexion::obtener_conexion(), $entrada->obtener_autor_id());
              ?>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg> <?php echo "  " . $autor->obtener_nombre() ?>

            </div>

            <div class="entrada-fecha">
              <?php
                echo $entrada->obtener_fecha();
              ?>
            </div>

            <div class="justificar-texto cuerpo-entrada-v2">
              <?php
                //echo RUTA_INSERTAR_FAVORITOS . "?id_entrada=" . $entrada->obtener_id() . "?id_usuario=" . $_SESSION["id_usuario"];
                echo nl2br($entrada->obtener_texto());
              ?>
            </div>

          </div>
        </div>
      </div>

      <br>
      <div class="col-md-5">
        <a href="<?php echo RUTA_INSERTAR_FAVORITOS . "?id_entrada=" . $entrada->obtener_id() . "&id_usuario=" . $_SESSION["id_usuario"]; ?>">
          <button type="button" class="btn btn-light">Guardar entrada</button>
        </a>
      </div>

      <?php
        include_once "plantillas/entradas_al_azar.inc.php";
      ?>
      <br>
      <?php

        $comentarios = RepositorioComentario::obtener_comentarios(Conexion::obtener_conexion(), $entrada->obtener_id());  // VAMOS POR AQUI

        if(count($comentarios)>0){
          include_once "plantillas/comentarios_entrada.inc.php";
        }
        else{
          echo "<p>Todavía no hay comentarios.</p>";
        }
      ?>

    </div>

    <?php
      include_once "plantillas/footerScripts.inc.php";
    ?>
  </body>
</html>
