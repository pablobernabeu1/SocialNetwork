<?php

  include_once "RepositorioEntrada.inc.php";
  include_once "Entrada.inc.php";

  class EscritorEntradas {

    public static function escribir_entradas(){
      $entradas = RepositorioEntrada::obtener_entradas_mas_nuevas(Conexion::obtener_conexion());

      if(count($entradas)){
        foreach($entradas as $entrada){
          self::escribir_entrada($entrada);
        }
      }

    }

    public static function escribir_entrada($entrada){
      if(!isset($entrada)){
        return;
      }
      ?>


      <div class="row dejar-espacio">
        <div class="col-md-12">
          <div>

            <div class="titulo-entrada">
              <?php
                echo $entrada->obtener_titulo();
              ?>
            </div>

            <div class="cuerpo-entrada">
              <p>
                <strong>
                  <?php
                    echo $entrada->obtener_fecha();
                  ?>
                </strong>
              </p>
              <div class="justificar-texto">
                <?php
                  echo nl2br(self::resumir_texto($entrada->obtener_texto()));  // para hcer los saltos de linea.
                ?>
              </div>

              <br>

              <div class="boton-centro">
                <?php
                  $url_entrada = $entrada->obtener_url();
                ?>
                <a class="btn btn-dark" href="<?php echo RUTA_ENTRADA . "?url=" . $url_entrada ?>" role="button">Seguir leyendo</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
    }

    public static function resumir_texto($texto){
      $longitud_maxima = 400;
      $resultado="";

      if(strlen($texto)>=$longitud_maxima){

        $resultado = substr($texto, 0, $longitud_maxima);
        $resultado .= "...";

      }
      else{
        $resultado = $texto;
      }

      return $resultado;
    }

    function sa($longitud){
      $caracteres = "º123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
      $numero_caracteres = strlen($caracteres);
      $string_aleatorio = "";

      for($i=0; $i<$longitud; $i++){
        $string_aleatorio .= $caracteres[rand(0, $numero_caracteres-1)];
      }

      return $string_aleatorio;
    }

  }
