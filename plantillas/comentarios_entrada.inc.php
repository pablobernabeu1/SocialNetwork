<?php

  include_once "app/Conexion.inc.php";
  include_once "app/RepositorioEntrada.inc.php";
  include_once "app/EscritorEntradas.inc.php";

?>

<div class="row">
  <div class="col-md-12">
    <button type="button" role="button" class="btn btn-dark form-control" data-bs-toggle="collapse" data-bs-target="#comentarios" aria-expanded="false">
      <?php
        echo "Ver comentarios(" . count($comentarios) . ")";
      ?>
    </button>
    <br>
    <br>
    <div id="comentarios" class="collapse">
      <?php

        for($i=0; $i < count($comentarios); $i++){
          $comentario = $comentarios[$i];
          ?>

          <div class="row">
            <div class="col-md-12">
              <div>
                <div>
                  <?php echo $comentario->obtener_titulo(); ?>
                </div>
                <div>
                  <div class="col-md-2">
                    <?php echo $comentario->obtener_autor_id() ?>
                  </div>
                  <div class="col-md-10">
                    <p>
                      <?php echo $comentario->obtener_fecha(); ?>
                    </p>
                    <p>
                      <?php echo nl2br($comentario->obtener_texto()); ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
        }

      ?>
    </div>
  </div>
</div>
