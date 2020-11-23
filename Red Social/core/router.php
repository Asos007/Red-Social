<?php
include "core/helpers/usuarioJSON.php";
include "core/helpers/publicacionJSON.php";
include "core/helpers/archivo.php";
include "core/models/usuario.php";
include "core/models/publicacion.php";
include "core/controllers/login.php";
include "core/controllers/blog.php";

if (!empty($_COOKIE["usuario"])) {
    if (isset($_GET["controller"]) && isset($_GET["action"])) {

        if($_GET["controller"] == "login" && $_GET["action"] == "registrar") {
            call_user_func(array("login", "registrar"));
        }

        $Controller = $_GET["controller"];
        $Controller = new $Controller;

        call_user_func(array($Controller, $_GET["action"]));
    } else {
        $blog = new blog();
        call_user_func(array($blog, "inicio"));
    }
}elseif(isset($_GET["controller"]) && $_GET["controller"] == "login" && $_GET["action"] == "registrar") {
    $login = new login();
    call_user_func(array($login, "registrar"));
}else {
    $login = new login();
    call_user_func(array($login, "iniciar_sesion"));
}
