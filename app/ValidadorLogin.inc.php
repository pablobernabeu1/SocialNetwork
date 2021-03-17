<?php
include_once "RepositorioUsuario.inc.php";  //decir que lo ponga

  class ValidadorLogin {

    private $usuario;
    private $error;

    public function __construct($email, $password, $conexion){

      $this->error = "";

      if(!$this->variable_iniciada($email) || !$this->variable_iniciada($password)){

        $this->$usuario = null;
        $this->error = "Debes introducir tu email y tu contraseña.";

      }
      else{
        $this->usuario = RepositorioUsuario::obtener_usuario_por_email($conexion, $email);

        if(is_null($this->usuario) || !password_verify($password, $this->usuario->obtener_password())) {
          $this->error = "Datos incorrectos.";
        }
      }

    }

    public function variable_iniciada($variable){  // Función que comprueba si una variable ha sido inicializada
      if(isset($variable) && !empty($variable)){
        return true;
      }
      return false;
    }

    public function obtener_usuario(){
      return $this->usuario;
    }

    public function obtener_error(){
      return $this->error;
    }

    public function mostrar_error(){
      if($this->error!==""){
        echo "<br><div class=\"alert alert-danger\" role=\"alert\">";
        echo $this->error;
        echo "</div><br>";
      }
    }

  }
