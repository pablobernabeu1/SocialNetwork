<?php
  include_once "app/Conexion.inc.php";
  include_once "app/RepositorioUsuario.inc.php";
  include_once "app/ValidadorRegistro.inc.php";

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>pablobernabeupage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="logo/logo_small_icon_only_inverted.png"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">
    </head>
    <body>

        <header>
            <div class="container logo-nav-container">
                <a href="#" class="logo"><img src="logo/logo_small_red.png" alt="alt"/></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list menu-icon" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
                <nav class="navigation">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="logInPage.php">Log In</a></li>
                        <li><a href="signInPage.php">Sign In</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>


        <main class="main">
            <div class="container">

                <h1>Hola soy Pablo Bernabeu</h1>

                <p>Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra</p>

                <p>Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra</p>

                <p>Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra</p>

                <p>Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra</p>

                <p>Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra
                Texto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestraTexto de muestra</p>

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