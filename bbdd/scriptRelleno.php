<?php

  include_once "app/config.inc.php";
  include_once "app/Conexion.inc.php";

  include_once "app/Usuario.inc.php";
  include_once "app/Entrada.inc.php";
  include_once "app/Comentario.inc.php";

  include_once "app/RepositorioUsuario.inc.php";
  include_once "app/RepositorioEntrada.inc.php";
  include_once "app/RepositorioComentario.inc.php";

  Conexion::abrir_conexion();

  for($usuarios = 0; $usuarios<100; $usuarios++){
    $nombre = sa(10);
    $email = sa(5) . "@" . sa(3);
    $password = password_hash("123456", PASSWORD_DEFAULT);

    $usuario = new Usuario("", $nombre, $email, $password, "", "");
    RepositorioUsuario::insertar_usuario(Conexion::obtener_conexion(), $usuario);

  }

  for($entradas = 0; $entradas<100; $entradas++){
    $titulo = sa(10);
    $url = $titulo;
    $text = lorem();
    $autor = rand(1, 100);

    $entrada = new Entrada("", $autor, $url, $titulo, $text, "", "");
    RepositorioEntrada::insertar_entrada(Conexion::obtener_conexion(), $entrada);
  }

  for($comentarios = 0; $comentarios<100; $comentarios++){
    $titulo = sa(10);
    $text = lorem();
    $autor = rand(1, 100);
    $entrada = rand(1, 100);

    $comentario = new Comentario("", $autor, $entrada, $titulo, $text, "");
    RepositorioComentario::insertar_comentario(Conexion::obtener_conexion(), $comentario);
  }



  function sa($longitud){
    $caracteres = "º123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    $numero_caracteres = strlen($caracteres);
    $string_aleatorio = "";

    for($i=0; $i<$longitud; $i++){
      $string_aleatorio .= $caracteres[rand(0, $numero_caracteres-1)];
    }

    return $string_aleatorio;
  }

  function lorem(){
    $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim dictum dictum. Vivamus nec tempus neque. In commodo, dui eu molestie elementum, felis ipsum congue nisl, et tempus lorem ipsum vel urna. Sed rhoncus sollicitudin massa, quis finibus lorem. Nam id vehicula nulla, vitae auctor metus. Ut ipsum nunc, sodales lobortis fringilla vitae, venenatis sed massa. Ut condimentum feugiat dui nec tempus. Aenean imperdiet rutrum ligula, et condimentum tellus rhoncus at. Proin efficitur euismod erat a blandit. Cras volutpat ipsum metus, in ullamcorper erat dapibus non. Duis a feugiat sapien. Integer iaculis tortor eu metus imperdiet, nec aliquet justo lacinia. In hac habitasse platea dictumst.

Duis a dolor sit amet ipsum egestas mattis sed sit amet diam. Fusce massa nisi, hendrerit in lacus sit amet, iaculis laoreet nisi. Nullam rutrum magna et viverra volutpat. Suspendisse venenatis varius metus eu dapibus. In cursus enim et ante aliquam, eget semper nisl porttitor. Nulla semper sodales lorem at tincidunt. Integer quis nulla ornare, suscipit quam non, molestie risus. Donec risus diam, finibus vitae feugiat ac, feugiat ac turpis. In malesuada neque sit amet ultrices convallis.

Pellentesque laoreet id velit a viverra. Aliquam erat volutpat. Fusce vel turpis dapibus, aliquet tellus id, vehicula neque. Donec dui ex, tempus at erat eu, hendrerit venenatis dui. In tempus imperdiet tristique. Suspendisse ac ante non augue tristique venenatis. Proin sit amet dignissim felis, eu rutrum sapien.

Etiam quis ligula nec justo laoreet eleifend in eu nisi. Aliquam tincidunt bibendum tellus ac iaculis. Nulla lacinia malesuada risus gravida iaculis. Ut cursus tempor ultrices. Nunc commodo, mauris in bibendum gravida, est dui blandit nisi, a vehicula turpis lorem ut elit. Phasellus pretium maximus neque sed semper. Sed convallis laoreet erat, nec suscipit diam egestas sit amet. Pellentesque sodales, mi et semper eleifend, tortor neque semper augue, a feugiat leo libero at lectus.

Sed dui urna, cursus in leo ac, porttitor gravida tortor. Praesent ac neque vel urna tincidunt rutrum. Vestibulum cursus sed quam nec vulputate. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam tellus magna, placerat at lacus eu, tempor vehicula neque. Vestibulum sed sagittis urna. Donec at tincidunt elit. Etiam dictum leo nisl, sed efficitur lacus tristique ac. Curabitur hendrerit arcu eu est lacinia sodales. Praesent tincidunt ac tortor sed mollis. Cras congue posuere semper. Aenean urna orci, dignissim sit amet justo at, pellentesque maximus massa. Fusce dapibus congue lorem sit amet faucibus. Integer consequat ultrices odio vel aliquam. Nullam ligula turpis, fermentum malesuada imperdiet et, scelerisque vitae lorem. Morbi diam sem, sollicitudin vel pharetra at, vulputate non lacus.";

    return $lorem;
  }

  Conexion::cerrar_conexion();
