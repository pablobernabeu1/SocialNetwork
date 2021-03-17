create database blog
  DEFAULT CHARACTER SET utf8;

use blog;

create table usuarios (
  id int not null unique auto_increment,
  nombre varchar(25) not null unique,
  email varchar(255) not null unique,
  password varchar(255) not null,
  fecha_registro datetime not null,
  activo tinyint not null,
  primary key(id)
);

create table entradas (
  id int not null unique auto_increment,
  autor_id int not null,
  titulo varchar(255) not null unique,
  texto text CHARACTER SET utf8 not null,
  fecha datetime not null,
  activa tinyint not null,
  primary key(id),
  foreign key(autor_id)
    references usuarios(id)
      on update cascade
      on delete restrict
);

create table comentarios(
    id int not null unique auto_increment,
    autor_id int not null,
    entrada_id int not null,
    titulo varchar(255) not null,
    texto text CHARACTER SET utf8 not null,
    fecha datetime not null,
    primary key(id),
    foreign key(autor_id)
      references usuarios(id)
        on update cascade
        on delete restrict,
    foreign key(entrada_id)
      references entradas(id)
        on update cascade
        on delete restrict
);
