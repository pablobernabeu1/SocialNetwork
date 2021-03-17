<?php

  include_once "config.inc.php";
  include_once "Conexion.inc.php";
  include_once "Entrada.inc.php";

  class RepositorioEntrada {

    public static function insertar_entrada($conexion, $entrada){
      $entrada_insertada = false;

      if(isset($conexion)){
        try{

          $sql = "insert into entradas(autor_id, titulo, texto, fecha, activa) values(:autor_id, :titulo, :texto, NOW(), 0)";

          $sentencia = $conexion->prepare($sql);

          $sentencia->bindParam(':autor_id', $entrada->obtener_autor_id(), PDO::PARAM_STR);
          $sentencia->bindParam(':titulo', $entrada->obtener_titulo(), PDO::PARAM_STR);
          $sentencia->bindParam(':texto', $entrada->obtener_texto(), PDO::PARAM_STR);

          $entrada_insertada = $sentencia->execute();

        }
        catch(PDOException $ex){
          print 'ERROR: ' . $ex.getMessage();
        }
      }

      return $entrada_insertada;
    }

  }
