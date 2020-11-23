<?php

class publicacionJSON
{

    public $directorio = "./data/publicaciones.json";

    function __construct()
    {
        if (!file_exists("./data")) {
            mkdir("./data", 0777, true);
        }
    }

    public function crear_publicacion($publicacion)
    {
        $usuarios = file_get_contents($this->directorio);
        $DataActual  = json_decode($usuarios, true);
        $DataActual[] = $publicacion;
        $DataActualizada = json_encode($DataActual);
        file_put_contents($this->directorio, $DataActualizada);
    }

    public function mis_publicaciones()
    {
        $mis_publicaciones = array();
        if (file_exists($this->directorio)) {
            $mis_publicaciones = file_get_contents($this->directorio);
            $DataActual  = json_decode($mis_publicaciones, true);
            return $DataActual;
        } else {
            return $mis_publicaciones;
        }
    }

    public function obtener_publicacion($id)
    {
        if (file_exists($this->directorio)) {
            $mis_publicaciones = file_get_contents($this->directorio);
            $DataActual  = json_decode($mis_publicaciones, true);
            return $DataActual[$id];
        }
    }

    public function editar_publicacion($id, $publicacion)
    {
        $usuarios = file_get_contents($this->directorio);
        $DataActual  = json_decode($usuarios, true);
        unset($DataActual[$id]);
        $DataActual[$id] = $publicacion;
        $DataActualizada = json_encode($DataActual);
        file_put_contents($this->directorio, $DataActualizada);
    }

    public function eliminar_publicacion($id)
    {
        $usuarios = file_get_contents($this->directorio);
        $DataActual  = json_decode($usuarios, true);
        unset($DataActual[$id]);
        $DataActualizada = json_encode($DataActual);
        file_put_contents($this->directorio, $DataActualizada);
    }
}
