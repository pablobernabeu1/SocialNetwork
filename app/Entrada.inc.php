<?php

  class Entrada {

    private $id;
    private $autor_id;
    private $titulo;
    private $texto;
    private $fecha;
    private $activa;

    public function __construct($id, $autor_id, $titulo, $texto, $fecha, $activa){
      $this->id = $id;
      $this->autor_id = $autor_id;
      $this->titulo = $titulo;
      $this->texto = $texto;
      $this->fecha = $fecha;
      $this->activa = $activa;
    }

    public function obtener_id(){
        return $this -> id;
    }

    public function obtener_autor_id(){
        return $this -> autor_id;
    }

    public function obtener_titulo(){
        return $this -> titulo;
    }

    public function obtener_texto(){
        return $this -> texto;
    }

    public function obtener_fecha(){
        return $this -> fecha;
    }

    public function esta_activa(){
        return $this -> activa;
    }

    public function cambiar_titulo($titulo){
      $this->titulo = $titulo;
    }

    public function cambiar_texto($texto){
      $this->texto = $texto;
    }

    public function cambiar_activa($activa){
      $this->activa = $activa;
    }

  }
