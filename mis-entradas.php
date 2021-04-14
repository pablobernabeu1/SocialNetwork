<?php
  session_start();
  include_once "app/Conexion.inc.php";
  include_once "app/config.inc.php";
  include_once "app/Entrada.inc.php";
  include_once "app/RepositorioEntrada.inc.php";
  include_once "app/Usuario.inc.php";
  include_once "app/RepositorioUsuario.inc.php";

?>

<DOCTYPE html>
<html>
  <head>
    <title>Mis entradas</title>
    <?php
      include_once "plantillas/headDeclaration.inc.php";
    ?>
  </head>
  <body>
    <?php
      include_once "plantillas/navbar.inc.php";
    ?>

    <div class="container">
      <div class="row">

        <p class="texto-panel"><strong>Mis entradas</strong></p>

        <hr>

      </div>
    </div>

    <?php
      $mis_entradas = RepositorioEntrada::obtener_mis_entradas(Conexion::obtener_conexion(), $_SESSION["id_usuario"]);

      if(count($mis_entradas)){

        for($i=0; $i<count($mis_entradas); $i++){
          $entrada = $mis_entradas[$i];

          ?>

          <div class="container">
            <div class="row dejar-espacio-entrada">
              <div class="col-md-12">

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
                    echo nl2br($entrada->obtener_texto());
                  ?>
                </div>
              </div>

              </div>

              <br>
              <div class="col-md-5">
                <a href="<?php echo RUTA_QUITAR_FAVORITAS . "?id_entrada=" . $entrada->obtener_id(); ?>">
                  <button type="button" class="btn btn-light">Quitar entrada</button>
                </a>
              </div>

            </div>
          </div>

          <?php
        }

      }
      else{

        //echo "Aún no has publicado ninguna entrada.";
      }

    ?>


    <?php
      include_once "plantillas/footerScripts.inc.php";
    ?>
  </body>
</html>
