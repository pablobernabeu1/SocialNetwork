<?php

  include_once "config.inc.php";
  include_once "Conexion.inc.php";


  class RepositorioEntrada {

    public static function insertar_entrada($conexion, $entrada){
      $entrada_insertada = false;

      if(isset($conexion)){
        try{

          include_once "Entrada.inc.php";

          $sql = "insert into entradas(autor_id, url, titulo, texto, fecha, activa) values(:autor_id, :url, :titulo, :texto, NOW(), 0)";

          $sentencia = $conexion->prepare($sql);

          $aut = $entrada->obtener_autor_id();
          $ur = $entrada->obtener_url();
          $ent = $entrada->obtener_titulo();
          $tex = $entrada->obtener_texto();

          $sentencia->bindParam(":autor_id", $aut, PDO::PARAM_STR);
          $sentencia->bindParam(":url", $ur, PDO::PARAM_STR);
          $sentencia->bindParam(":titulo", $ent, PDO::PARAM_STR);
          $sentencia->bindParam(":texto", $tex, PDO::PARAM_STR);

          $entrada_insertada = $sentencia->execute();

        }
        catch(PDOException $ex){
          print 'ERROR: ' . $ex->getMessage();
        }
      }

      return $entrada_insertada;
    }

    public static function obtener_entradas_mas_nuevas($conexion){
      $entradas = [];

      if(isset($conexion)){
        try{

          $sql = "select * from entradas order by fecha desc limit 5";
          $sentencia = $conexion->prepare($sql);

          $sentencia->execute();

          $resultado = $sentencia->fetchAll();

          if(count($resultado)){
            foreach($resultado as $fila){
              $entradas[] = new Entrada($fila["id"], $fila["autor_id"], $fila["url"], $fila["titulo"], $fila["texto"], $fila["fecha"], $fila["activa"]);
            }
          }

        }
        catch(PDOException $ex){
          print 'ERROR: ' . $ex->getMessage();
        }
      }

      return $entradas;

    }

    public static function obtener_entrada_por_url($conexion, $url){
      $entrada=null;

      if(isset($conexion)){

        try{

          $sql = "select * from entradas where url like :url";
          $sentencia = $conexion->prepare($sql);

          $sentencia->bindParam(":url", $url, PDO::PARAM_STR);

          $sentencia->execute();

          $resultado = $sentencia->fetch();

          if(!empty($resultado)){
            $entrada = new Entrada($resultado["id"], $resultado["autor_id"], $resultado["url"], $resultado["titulo"], $resultado["texto"], $resultado["fecha"], $resultado["activa"]);
          }

        }
        catch(PDOException $ex){
          print 'ERROR: ' . $ex->getMessage();
        }

      }

      return $entrada;
    }

    public static function obtener_entradas_al_azar($conexion, $limite){
      $entradas=[];

      if(isset($conexion)){
        try{

          $sql = "select * from entradas order by rand() limit $limite";

          $sentencia = $conexion->prepare($sql);
          $sentencia->execute();

          $resultado = $sentencia->fetchAll();

          if(count($resultado)){
            foreach($resultado as $fila){
              $entradas[] = new Entrada($fila["id"], $fila["autor_id"], $fila["url"], $fila["titulo"], $fila["texto"], $fila["fecha"], $fila["activa"]);
            }
          }


        }
        catch(PDOException $ex){
          print 'ERROR: ' . $ex->getMessage();
        }
      }

      return $entradas;
    }

  }
