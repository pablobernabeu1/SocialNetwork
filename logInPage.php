<?php
include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/RepositorioUsuario.inc.php";
include_once "app/ValidadorLogin.inc.php";
include_once "app/ControlSesion.inc.php";
include_once "app/Redireccion.inc.php";

if(ControlSesion::sesion_iniciada()){
  Redireccion::redirigir(SERVIDOR);
}

if(isset($_POST["login"])){
  Conexion::abrir_conexion();

  $validador = new ValidadorLogin($_POST["email"], $_POST["password"], Conexion::obtener_conexion());

  if($validador->obtener_error()==="" && !is_null($validador->obtener_usuario())){

    //Iniciar sesión
    ControlSesion::iniciar_sesion($validador->obtener_usuario()->obtener_id(), $validador->obtener_usuario()->obtener_nombre());

    //redirigir
    Redireccion::redirigir(SERVIDOR);





  }

  Conexion::cerrar_conexion();

}

?>

<!DOCTYPE html>
<html>
  <head>

      <title>Inicio sesión</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="logo/logo_small_icon_only_inverted.png"/>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/estilos.css?v=<?php echo time(); ?>" />

  </head>
  <body>

    <header>
      <div class="container logo-nav-container">
        <a href="index.php" class="logo"><img src="logo/logo_small_red.png" alt="alt"/></a>
        <span class="menu-icon">Ver menú</span>
        <nav class="navigation">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Log In</a></li>
                <li><a href="signInPage.php">Sign In</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
      </div>
    </header>

      <main class="inicio-main">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail4" placeholder="example@servicio.com" name="email"

              <?php
                if(isset($_POST["login"]) && isset($_POST["email"]) && !empty($_POST["email"])){
                  echo "value=\"" . $_POST["email"] . "\"";
                }

               ?>

              required autofocus>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword" name="password" required>
            </div>
          </div>

          <?php
            if(isset($_POST["login"])){
              $validador->mostrar_error();
            }
          ?>

          <div class="col-12">
            <button type="submit" class="btn btn-primary" name="login">Log in</button>
          </div>
        </form>
      </main>


      <footer>
        <div class="container">
          <p>Página diseñada por Pablo Bernabeu</p>
        </div>
      </footer>



      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="js/script.js"></script>
  </body>
</html>
