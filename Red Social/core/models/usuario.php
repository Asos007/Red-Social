<?php


class usuario{

    public $nombre;
    public $apellido;
    public $correo;
    public $username;
    public $pass;
    public $estado;
    public $foto;

    
    public function __construct($nombre,$apellido,$correo,$username,$pass)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->correo=$correo;
        $this->username=$username;
        $this->pass=$pass;
        $this->estado=false;
    }
}