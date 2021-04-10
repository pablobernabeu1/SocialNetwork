<?php

  include_once "app/Conexion.inc.php";
  include_once "app/config.inc.php";

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Nueva entrada</title>
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

        <p class="texto-panel"><strong>Nueva entrada</strong></p>

        <div class="panel">

          <div class="row">
            <div class="col-md-12">

              <form class="row g-3" method="POST" action="<?php echo RUTA_NUEVA_ENTRADA; ?>">
                <div class="col-md-12">
                  <label for="titulo" class="form-label">Titulo</label>
                  <input type="text" class="form-control" id="titulo-entrada" name="titulo" required>
                </div>
                <div class="col-md-12">
                  <label for="contenido" class="form-label">Texto</label>
                  <textarea class="form-control" rows="8" id="contenido-entrada" name="texto" required></textarea>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="publicar" value="si">  Seleccione el recuadro si quiere subir la entrada de inmediato
                  </label>
                </div>

                <div>
                  <button type="submit" class="btn btn-dark" name="guardar">Publicar</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
      include_once "plantillas/footerScripts.inc.php";
    ?>
  </body>
</html>
