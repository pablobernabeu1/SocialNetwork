<?php
  include_once 'app/Conexion.inc.php';
  include_once 'app/RepositorioUsuario.inc.php';
  include_once 'app/ValidadorRegistro.inc.php';

  if(isset($_POST['enviar'])){
    $validador = new ValidadorRegistro($_POST['email'], $_POST['nombre'], $_POST['password'], $_POST['password2']);

    if($validador->registro_valido()){
      echo "TODO CORRECTO.";
    }
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
      <link href="css/estilos.css" rel="stylesheet">


  </head>
  <body>
      <header>
        <div class="container logo-nav-container">
          <a href="index.html" class="logo"><img src="logo/logo_small_red.png" alt="alt"/></a>
          <span class="menu-icon">Ver menú</span>
          <nav class="navigation">
              <ul>
                  <li><a href="index.html">Inicio</a></li>
                  <li><a href="logInPage.html">Log In</a></li>
                  <li><a href="#">Sign In</a></li>
                  <li><a href="#">Contacto</a></li>
              </ul>
          </nav>
        </div>
      </header>


      <div class="registro-div">
        <form class="row g-3" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

          <?php
            if(isset($_POST['enviar'])){
              include_once 'plantillas/registro_validado.inc.php';
            }
            else{
              include_once 'plantillas/registro_vacio.inc.php';
            }
          ?>

        </form>
      </div>

      <footer>
        <div class="container">
          <p>Página diseñada por Pablo Bernabeu</p>
        </div>
      </footer>


      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="js/script.js"></script>
  </body>
</html>
