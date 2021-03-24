<?php

  include_once "app/Conexion.inc.php";
  include_once "app/RepositorioEntrada.inc.php";
  include_once "app/EscritorEntradas.inc.php";

  $entradas_al_azar = RepositorioEntrada::obtener_entradas_al_azar(Conexion::obtener_conexion(), 3);

?>

<div class="row">
  <div class="col-md-12">
    <br>
    <hr>
    <h3>Otras entradas</h3>
    <br>
  </div>

  <?php
    for($i=0; $i<count($entradas_al_azar); $i++){
      $entrada_actual = $entradas_al_azar[$i];
      ?>

      <div class="col-md-4">
        <div>
          <div class="titulo-entrada">
            <?php
              echo $entrada_actual->obtener_titulo();
            ?>
          </div>
          <div class="cuerpo-entrada">
            <p>
              <?php
                echo EscritorEntradas::resumir_texto(nl2br($entrada_actual->obtener_texto()));
              ?>
            </p>
          </div>
        </div>
      </div>

      <?php
    }
  ?>

  <div class="col-md-12">
    <hr>
  </div>

</div>
