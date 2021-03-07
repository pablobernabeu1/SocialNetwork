<?php

  include_once "app/config.inc.php";
  include_once "app/Conexion.inc.php";
  include_once "app/RepositorioUsuario.inc.php";
  include_once "app/Redireccion.inc.php";

  if(isset($_GET["nombre"]) && !empty($_GET["nombre"])){
    $nombre = $_GET["nombre"];
  }
  else{
    Redireccion::redirigir(SERVIDOR);
  }

  $titulo = "Registro correcto!";

  ?>


  <!DOCTYPE html>
  <html>
    <head>

        <title>Registro correcto</title>
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
                  <li><a href="logInPage.php">Log In</a></li>
                  <li><a href="#">Sign In</a></li>
                  <li><a href="#">Contacto</a></li>
              </ul>
          </nav>
        </div>
      </header>



      <div class="div-registro-correcto">
        <div class="row">
          <div class="col-md-12">
            <div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                </svg> Registro correcto
              </div>

              <div>
                <br>
                <br>
                <p>Gracias por registarte.</p>
                <p><a href="<?php echo RUTA_LOGIN ?>">Inicie sesión</a> para usar su cuenta.</p>
              </div>
            </div>
          </div>
        </div>
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
