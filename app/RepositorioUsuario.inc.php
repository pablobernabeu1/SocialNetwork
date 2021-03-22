<?php

class RepositorioUsuario {

    public static function obtener_todos($conexion){

        $usuarios = array();

        if(isset($conexion)){

            try{

                include_once "Usuario.inc.php";

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
                print "Error: " . $ex -> getMessage();
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

    public static function insertar_usuario($conexion, $usuario){

      $usuario_insertado = false;

      if(isset($conexion)){
        try{

          $sql = "insert into usuarios(nombre, email, password, fecha_registro, activo) values(:nombre, :email, :password, NOW(), 0)";

          $sentencia = $conexion->prepare($sql);

          $usuario_nombre = $usuario->obtener_nombre();
          $usuario_email = $usuario->obtener_email();
          $usuario_password = $usuario->obtener_password();

          $sentencia->bindParam(':nombre', $usuario_nombre, PDO::PARAM_STR);
          $sentencia->bindParam(':email', $usuario_email, PDO::PARAM_STR);
          $sentencia->bindParam(':password', $usuario_password, PDO::PARAM_STR);

          $usuario_insertado = $sentencia->execute();

        }
        catch(PDOException $ex){
          print 'ERROR: ' . $ex.getMessage();
        }
      }

      return $usuario_insertado;
    }

    public static function nombre_exite($conexion, $nombre){
      $existe=true;
      if(isset($conexion)){

        try{

          $sql = "select * from usuarios where nombre = :nombre";

          $sentencia = $conexion->prepare($sql);

          $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);

          $sentencia->execute();

          $resultado = $sentencia->fetchAll();

          if(count($resultado)){
            $existe = true;
          }
          else{
            $existe=false;
          }

        }
        catch(PDOException $ex){
          print 'Error: ' . $ex->getMessage();
        }

      }
      return $existe;
    }

    public static function email_exite($conexion, $email){
      $existe=true;
      if(isset($conexion)){

        try{

          $sql = "select * from usuarios where email = :email";

          $sentencia = $conexion->prepare($sql);

          $sentencia->bindParam(':email', $email, PDO::PARAM_STR);

          $sentencia->execute();

          $resultado = $sentencia->fetchAll();

          if(count($resultado)){
            $existe = true;
          }
          else{
            $existe=false;
          }

        }
        catch(PDOException $ex){
          print 'Error: ' . $ex->getMessage();
        }

      }
      return $existe;
    }

    public static function obtener_usuario_por_email($conexion, $email){
      $usuario = null;

      if(isset($conexion)){
        try{

          include_once "Usuario.inc.php";

          $sql = "select * from usuarios where email = :email";

          $sentencia = $conexion->prepare($sql);
          $sentencia->bindParam(":email", $email, PDO::PARAM_STR);

          $sentencia->execute();

          $resultado = $sentencia->fetch();

          if(!empty($resultado)){
            $usuario = new Usuario($resultado["id"], $resultado["nombre"], $resultado["email"], $resultado["password"], $resultado["fecha_registro"], $resultado["activo"]);
          }

        }
        catch(PDOException $ex){
          print "Error: " . ex.getMessage();
        }
      }
      return $usuario;

    }

}
