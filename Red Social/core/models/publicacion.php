<?php


class publicacion{

    public $titulo;
    public $contenido;
    public $fecha;
    public $username;

    
    public function __construct($titulo,$contenido)
    {
        $this->titulo=$titulo;
        $this->contenido=$contenido;
    }
}