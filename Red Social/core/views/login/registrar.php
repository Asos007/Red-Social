<div class="text-center mx-auto" style="width: 18rem;display:block;">
    <form class="form-signin" method="post" action="index.php?controller=login&action=registrar" enctype="multipart/form-data">
        <div class="text-center mb-4">
            <img width="72" height="72" class="mb-4" alt="" src="img\fox.png">
            <h1 class="h3 mb-3 font-weight-normal">Registrate</h1>
        </div>

        <div class="form-label-group">
            <label>Nombre</label>
            <input class="form-control" autofocus required type="text" name="nombre" value="<?php if(isset($_POST["nombre"])){echo $_POST["nombre"];} ?>">
        </div>

        <div class="form-label-group">
            <label>Apellido</label>
            <input class="form-control" type="text" name="apellido" value="<?php if(isset($_POST["apellido"])){echo $_POST["apellido"];} ?>">
        </div>

        <div class="form-label-group">
            <label>Foto de perfil</label>
            <input class="form-control"  type="file" name="foto">
        </div>

        <div class="form-label-group">
            <label>Email</label>
            <input class="form-control" required type="email" name="correo" value="<?php if(isset($_POST["correo"])){echo $_POST["correo"];} ?>">
        </div>

        <div class="form-label-group">
            <label>Nombre de usuario</label>
            <input class="form-control" required type="text" name="username" value="<?php if(isset($_POST["username"])){echo $_POST["username"];} ?>">
        </div>

        <div class="form-label-group">
            <label>Password</label>
            <input class="form-control" required type="password" name="pass">
        </div>
        <br>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Registrar">
        <a href="index.php?controller=login&action=iniciar_sesion" class="btn btn-lg btn-success btn-block" type="submit">Regresar</a>
    </form>
</div>