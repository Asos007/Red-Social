<?php

class login
{

    public $usuario;
    public $data;
    public $foto;

    function __construct()
    {
        $this->data = new usuarioJSON();
        $this->foto = new archivo();
    }

    public function iniciar_sesion()
    {
        if ($_POST) {

            $verificar = $this->data->validar_usuario($_POST["username"], $_POST["pass"], false);

            if ($verificar == true) {

                setcookie("usuario", $_POST["username"], time() + (86400 * 30), '/');

                echo '
                <script>
                    alert("Bienvenido ' . $_POST["username"] . '");
                    window.location.assign("index.php");
                </script>';
            } else {
                echo '
                <script>
                    alert("Usuario no encontrado");
                </script>';
            }
        }
        require_once("core/views/login/iniciar_sesion.php");
    }

    public function registrar()
    {
        if ($_POST) {

            $verificar = $this->data->validar_usuario($_POST["username"], $_POST["pass"], true);

            if ($verificar == true) {

                echo '
                <script>
                    alert("El nombre de usuario ya existe");
                </script>';
            } else {

                $usuario = new usuario(
                    $_POST["nombre"],
                    $_POST["apellido"],
                    $_POST["correo"],
                    $_POST["username"],
                    $_POST["pass"]
                );
                
                $usuario->foto = $this->foto->subir_foto();

                $this->data->registrar_usuario($usuario);

                echo '
                    <script>
                        alert("Accion realizada exitosamente");
                        window.location.assign("index.php");
                    </script>';
            }
        }
        require_once("core/views/login/registrar.php");
    }

    public function cerrar_sesion()
    {
        setcookie("usuario", "", time() - (86400 * 30), '/');
        echo '<script>window.location.assign("index.php");</script>';
    }
}
