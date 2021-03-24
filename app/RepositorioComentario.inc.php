<?php

  include_once "config.inc.php";
  include_once "Conexion.inc.php";


  class RepositorioComentario {

    public static function insertar_comentario($conexion, $comentario){
      $comentario_insertado = false;

      if(isset($conexion)){
        try{

          include_once "Comentario.inc.php";

          $sql = "insert into comentarios(autor_id, entrada_id, titulo, texto, fecha) values(:autor_id, :entrada_id, :titulo, :texto, NOW())";

          $sentencia = $conexion->prepare($sql);

          $aut = $comentario->obtener_autor_id();
          $ent = $comentario->obtener_entrada_id();
          $tit = $comentario->obtener_titulo();
          $tex = $comentario->obtener_texto();

          $sentencia->bindParam(":autor_id", $aut, PDO::PARAM_STR);
          $sentencia->bindParam(":entrada_id", $ent, PDO::PARAM_STR);
          $sentencia->bindParam(":titulo", $tit, PDO::PARAM_STR);
          $sentencia->bindParam(":texto", $tex, PDO::PARAM_STR);

          $comentario_insertado = $sentencia->execute();

        }
        catch(PDOException $ex){
          print 'ERROR: ' . $ex->getMessage();
        }
      }

      return $comentario_insertado;
    }

    public static function obtener_comentarios($conexion, $entrada_id){
      $comentarios = [];

      if(isset($conexion)){
        try {

          include_once "Comentario.inc.php";

          $sql = "select * from comentarios where entrada_id=:entrada_id";

          $sentencia = $conexion->prepare($sql);
          $sentencia->bindParam(":entrada_id", $entrada_id, PDO::PARAM_STR);

          $sentencia->execute();

          $resultado = $sentencia->fetchAll();

          if(count($resultado)){
            foreach($resultado as $fila){
              $comentarios[] = new Comentario($fila["id"], $fila["autor_id"], $fila["entrada_id"], $fila["titulo"], $fila["texto"], $fila["fecha"]);
            }
          }

        }
        catch (PDOException $ex) {
          print 'ERROR: ' . $ex->getMessage();
        }

      }

      return $comentarios;
    }

  }
