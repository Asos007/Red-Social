<?php

class blog
{

    public $usuario;
    public $blog;

    function __construct()
    {
        $this->blog = new publicacionJSON();
        $this->usuario = new usuarioJSON();
    }

    public function inicio()
    {
        $mis_publicaciones = $this->blog->mis_publicaciones();
        $usuario = $this->usuario->obtener_usuario($_COOKIE["usuario"]);
        require_once("core/views/blog/inicio.php");
    }

    public function publicar()
    {
        if ($_POST) {

            $publicacion = new publicacion($_POST["titulo"], $_POST["contenido"]);
            $publicacion->username =$_COOKIE["usuario"];
            $publicacion->fecha =date('Y-m-d');

            $this->blog->crear_publicacion($publicacion);

            echo '
            <script>
                alert("Accion realizada exitosamente");
                window.location.assign("index.php");
            </script>';
        }
        require_once("core/views/blog/crear.php");
    }

    public function editar()
    {
        $publicacion = $this->blog->obtener_publicacion($_GET["id"]);
        $fecha =$publicacion["fecha"];
        $username=$publicacion["username"];

        if ($_POST) {

            $publicacion = new publicacion($_POST["titulo"], $_POST["contenido"]);
            $publicacion->username =$username;
            $publicacion->fecha =$fecha;

            $this->blog->editar_publicacion($_GET["id"],$publicacion);

            echo '
            <script>
                alert("Accion realizada exitosamente");
                window.location.assign("index.php");
            </script>';
        }

        require_once("core/views/blog/editar.php");
    }

    public function eliminar()
    {
        if ($_POST) {
            $this->blog->eliminar_publicacion($_GET["id"]);
            echo '
            <script>
                alert("Accion realizada exitosamente");
                window.location.assign("index.php");
            </script>';
        }
        require_once("core/views/blog/eliminar.php");
    }
}
