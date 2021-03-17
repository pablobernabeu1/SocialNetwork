<?php

  include_once "config.inc.php";
  include_once "Conexion.inc.php";
  include_once "Comentario.inc.php";

  class RepositorioComentario {

    public static function insertar_comentario($conexion, $comentario){
      $comentario_insertado = false;

      if(isset($conexion)){
        try{

          $sql = "insert into comentarios(autor_id, entrada-id, titulo, texto, fecha) values(:autor_id, :entrada_id, :titulo, :texto, NOW())";

          $sentencia = $conexion->prepare($sql);

          $sentencia->bindParam(':autor_id', $comentario->obtener_autor_id(), PDO::PARAM_STR);
          $sentencia->bindParam(':entrada_id', $comentario->obtener_entrada_id(), PDO::PARAM_STR);
          $sentencia->bindParam(':titulo', $comentario->obtener_titulo(), PDO::PARAM_STR);
          $sentencia->bindParam(':texto', $comentario->obtener_texto(), PDO::PARAM_STR);

          $comentario_insertado = $sentencia->execute();

        }
        catch(PDOException $ex){
          print 'ERROR: ' . $ex.getMessage();
        }
      }

      return $comentario_insertado;
    }

  }
