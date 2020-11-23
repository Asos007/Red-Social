<div class="text-center mx-auto" style="width: 18rem;display:block;">
    <form class="form-signin" method="post" action="index.php?controller=login&action=iniciar_sesion">
        <img class="mb-4" src="img\fox.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Entrar en sesion</h1>
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Escribe tu nombre de usuario" required autofocus name="username">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Escribe tu contraseña" required name="pass">
        <br>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Ingresar">
        <a href="index.php?controller=login&action=registrar" class="btn btn-lg btn-success btn-block" type="submit">Registrate</a>
    </form>
</div>