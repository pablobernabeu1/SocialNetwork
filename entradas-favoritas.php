<?php
  include_once "app/Conexion.inc.php";
  include_once "app/EscritorEntradas.inc.php";
  include_once "app/RepositorioEntrada.inc.php";
  include_once "app/RepositorioUsuario.inc.php";
  include_once "app/ControlSesion.inc.php";
  include_once "app/Entrada.inc.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>
      Entradas favoritas
    </title>
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

      if(count($entradas_favoritas)){

        for($i=0; $i<count($entradas_favoritas); $i++){
          $id_entrada_obtenida = $entradas_favoritas[$i];
          $entrada_obtenida = RepositorioEntrada::obtener_entrada_por_id(Conexion::obtener_conexion(), $id_entrada_obtenida);

          ?>
          <div class="container">
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
                <div class="entrada-usuario">
                  <?php
                    $autor = RepositorioUsuario::obtener_usuario_por_id(Conexion::obtener_conexion(), $entrada_obtenida->obtener_autor_id());
                  ?>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg> <?php echo "  " . $autor->obtener_nombre() ?>
                </div>
                <div class="entrada-fecha">
                  <?php
                    echo $entrada_obtenida->obtener_fecha();
                  ?>
                </div>

                <div class="justificar-texto cuerpo-entrada-v2">
                  <?php
                    echo nl2br($entrada_obtenida->obtener_texto());
                  ?>
                </div>
              </div>
            </div>

            <br>
            <div class="col-md-5">
              <a href="<?php echo RUTA_QUITAR_FAVORITAS . "?id_entrada=" . $entrada_obtenida->obtener_id(); ?>">
                <button type="button" class="btn btn-light">Quitar entrada</button>
              </a>
            </div>

          </div>

          <?php
        }
        ?>
        <br>
        <br>
        <div class="container">
          <a href="#"><button class="btn btn-dark">Comprar</button></a>
        </div>
        <?php
      }
      else{
        ?>

        <div class="no-mensajes-favoritos">
          No hay mensajes favoritos
        </div>

        <?php
      }


    ?>



    <?php
      include_once "plantillas/footerScripts.inc.php";
    ?>
  </body>
</html>
