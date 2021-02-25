<?php

class RepositorioUsuario {

    public static function obtener_todos($conexion){

        $usuarios = array();

        if(isset($conexion)){

            try{

                include_once 'Usuario.inc.php';

                $sql = "select * from usuarios";

                $sentencia = $conexion -> prepare($sql);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if(count($resultado)){
                    foreach($resultado as $fila){
                        $usuarios[] = new Usuario($fila['id'], $fila['nombre'], $fila['email'], $fila['password'], $fila['nombre'], $fila['fecha_registro'], $fila['activo']);
                    }
                }
                else{
                    print "No hay usuarios";
                }

            } catch (PDOException $ex) {
                print "Error" . $ex -> getMessage();
            }

        }
        return $usuarios;
    }

    public static function obtenerNumeroUsuarios($conexion){

      $total_usuarios = null;

      if(isset($conexion)){
        try{

          $sql = "select count(*) as total from usuarios";

          $sentencia = $conexion -> prepare($sql);
          $sentencia -> execute();
          $resultado = $sentencia -> fetch();

          $total_usuarios = $resultado['total'];

        }
        catch(PDOException $ex){
          print 'ERROR' . $ex -> getMessage();
        }
      }
      return $total_usuarios;

    }

}
