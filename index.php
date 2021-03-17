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
        <link rel="stylesheet" href="css/estilos.css?v=<?php echo time(); ?>" />

    </head>
    <body>

        <?php
          include "plantillas/navbar.inc.php";
        ?>


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


        <?php
          include_once "plantillas/footerScripts.inc.php";
        ?>

    </body>
</html>
