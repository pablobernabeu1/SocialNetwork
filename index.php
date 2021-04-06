<?php

  include_once "app/config.inc.php";
  include_once "app/Conexion.inc.php";
  include_once "app/RepositorioUsuario.inc.php";
  include_once "app/ValidadorRegistro.inc.php";
  include_once "app/EscritorEntradas.inc.php";

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Pablo Bernabeu</title>
        <?php
          include_once "plantillas/headDeclaration.inc.php";
        ?>
    </head>
    <body>
        <?php
          include "plantillas/navbar.inc.php";
        ?>

        <main class="main">
            <div class="container">

                <h1><strong>Entradas</strong></h1>
                <hr>

                <?php
                  EscritorEntradas::escribir_entradas();
                ?>

            </div>
        </main>

        <?php
          include_once "plantillas/footerScripts.inc.php";
        ?>
    </body>
</html>
