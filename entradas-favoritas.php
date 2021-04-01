<?php
  include_once "app/Conexion.inc.php";
  include_once "app/EscritorEntradas.inc.php";
  include_once "app/RepositorioEntrada.inc.php";
  include_once "app/ControlSesion.inc.php";
  include_once "app/Entrada.inc.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <?php
      include_once "plantillas/headDeclaration.inc.php";
    ?>
  </head>
  <body>
    <?php
      include_once "plantillas/navbar.inc.php";
    ?>
    <?php
      $entradas_favoritas = RepositorioEntrada::obtener_entradas_favoritas_de_usuario(Conexion::obtener_conexion(), $id_usuario_verificado);


      for($i=0; $i<count($entradas_favoritas); $i++){
        $id_entrada_obtenida = $entradas_favoritas[$i];
        $entrada_obtenida = RepositorioEntrada::obtener_entrada_por_id(Conexion::obtener_conexion(), $id_entrada_obtenida);

        ?>

        <div class="row dejar-espacio-entrada">
          <div class="col-md-12">
            <div class="titulo-entrada-v2">
              <h3>
                <strong>
                  <?php
                    echo $entrada_obtenida->obtener_titulo();
                  ?>
                </strong>
              </h3>
            </div>
          </div>
        </div>

        <?php
      }

    ?>



    <?php
      include_once "plantillas/footerScripts.inc.php";
    ?>
  </body>
</html>
