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
    
}