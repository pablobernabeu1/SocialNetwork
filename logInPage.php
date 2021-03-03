<?php
include_once "app/Conexion.inc.php";
include_once "app/RepositorioUsuario.inc.php";
include_once "app/ValidadorRegistro.inc.php";

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
        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail4" placeholder="example@servicio.com">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword">
          </div>
        </div>
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
