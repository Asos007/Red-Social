<?php

class usuarioJSON
{

    public $directorio = "./data/usuarios.json";

    function __construct()
    {
        if (!file_exists("./data")) {
            mkdir("./data", 0777, true);
            fopen($this->directorio, "w+");
        }
    }

    public function registrar_usuario($usuario)
    {
        $usuarios = file_get_contents($this->directorio);
        $DataActual  = json_decode($usuarios, true);
        $DataActual[] = $usuario;
        $DataActualizada = json_encode($DataActual);
        file_put_contents($this->directorio, $DataActualizada);
    }

    public function validar_usuario($username, $pass, $modo)
    {
        $usuarios = file_get_contents($this->directorio);
        $DataActual  = json_decode($usuarios, true);

        foreach ($DataActual as $key => $value) {

            if ($modo == true) {
                if ($value["username"] == $username) {
                    $resultado = true;
                    break;
                } else {
                    $resultado = false;
                }
            } else {
                if ($value["username"] == $username && $value["pass"] == $pass && $value["estado"] == false) {
                    $resultado = true;
                    break;
                } else {
                    $resultado = false;
                }
            }
        }

        return $resultado;
    }

    public function obtener_usuario($username)
    {
        $mis_publicaciones = array();
        if (file_exists($this->directorio)) {
            $mis_publicaciones = file_get_contents($this->directorio);
            $DataActual  = json_decode($mis_publicaciones, true);
            foreach ($DataActual as $key => $value) {
                if ($value["username"] == $username) {
                    $mis_publicaciones = $value;
                }
            }
        }
        return $mis_publicaciones;
    }
}
