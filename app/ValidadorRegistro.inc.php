<?php
include_once "RepositorioUsuario.inc.php";

class ValidadorRegistro {

  private $aviso_inicio;
  private $aviso_cierre;

  private $email;
  private $nombre;
  private $password;

  private $error_email;
  private $error_nombre;
  private $error_password;
  private $error_password2;

  public function __construct($email, $nombre, $password, $password2, $conexion) {
    $this->aviso_inicio = "<br><div class='alert alert-danger' role='alert'>";
    $this->aviso_cierre = "</div>";

    $this->email = "";
    $this->nombre= "";
    $this->password="";

    $this->error_nombre = $this->validar_nombre($conexion, $nombre);
    $this->error_email = $this->validar_email($conexion, $email);
    $this->error_password = $this->validar_clave1($password);
    $this->error_password2 = $this->validar_clave2($password, $password2);

    if($this->error_password==="" && $this->error_password2===""){
      $this->password = $password;
    }

  }

  public function variable_iniciada($variable){  // Función que comprueba si una variable ha sido inicializada
    if(isset($variable) && !empty($variable)){
      return true;
    }
    return false;
  }

  private function validar_nombre($conexion, $nombre){  // Función que comprueba si el nombre es correcto
    if(!$this->variable_iniciada($nombre)){
      return "Debes escribir un nombre de usuario.";
    }
    else{
      $this->nombre = $nombre;
    }

    if(strlen($nombre)<6){
      return "El nombre debe ser más largo de 6 caracteres.";
    }

    if(strlen($nombre)>24){
      return "El nombre no puede ocupar más de 24 caracteres.";
    }

    if(RepositorioUsuario::nombre_exite($conexion, $nombre)){  // Decirle a Samu que haga esta funcion
      return "Este nombre ya está en uso, porfavor pruebe otro nombre.";
    }

    return "";

  }

  private function validar_email($conexion, $email){ // Función que comprueba si el email es correcto
    if(!$this->variable_iniciada($email)){
      return "Debes proporcionar un email.";
    }
    else{
      $this->email = $email;
    }

    if(RepositorioUsuario::email_exite($conexion, $email)){
      return "Este email ya está en uso. Porfavor pruebe otro email <br> o <a href='#'>intente recuperar su contraseña</<a>.";
    }

    return "";

  }

  private function validar_clave1($password){ // Función que comprueba si la contraseña es correcto
    if(!$this->variable_iniciada($password)){
      return "Debes proporcionar una contraseña.";
    }

    return "";
  }

  private function validar_clave2($password, $password2){ // Función que comprueba si las contraseñas son correctas e iguales.
    if(!$this->variable_iniciada($password)){
      return "Primero debes rellenar la contraseña.";
    }

    if(!$this->variable_iniciada($password)){
      return "Debes repetir la contraseña.";
    }

    if($password !== $password2){
      return "Ambas contraseñas deben coincidir.";
    }

    return "";
  }

  public function obtener_nombre(){
    return $this->nombre;
  }

  public function obtener_email(){
    return $this->email;
  }

  public function obtener_password(){
    return $this->password;
  }

  public function obtener_error_nombre(){
    return $this->$error_nombre;
  }

  public function obtener_error_email(){
    return $this->$error_email;
  }

  public function mostrar_nombre(){
    if($this->nombre !== ""){
      echo 'value="' . $this->nombre . '"';
    }
  }

  public function mostrar_error_nombre(){
    if($this->error_nombre !== ""){
      echo $this->aviso_inicio . $this->error_nombre . $this->aviso_cierre;
    }
  }

  public function mostrar_email(){
    if($this->email !== ""){
      echo 'value="' . $this->email . '"';
    }
  }

  public function mostrar_error_email(){
    if($this->error_email !== ""){
      echo $this->aviso_inicio . $this->error_email . $this->aviso_cierre;
    }
  }

  public function mostrar_error_password1(){
    if($this->error_password !== ""){
      echo $this->aviso_inicio . $this->error_password . $this->aviso_cierre;
    }
  }

  public function mostrar_error_password2(){
    if($this->error_password2 !== ""){
      echo $this->aviso_inicio . $this->error_password2 . $this->aviso_cierre;
    }
  }

  public function registro_valido(){
    if($this->error_nombre==="" && $this->error_email==="" && $this->error_password==="" && $this->error_password2===""){
      return true;
    }
    return false;
  }

}
